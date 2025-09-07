<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function create()
    {
        return view('resume.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            // Data utama
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|max:255',
            'phone'          => 'required|string|max:50',
            'photo'          => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            // Data pribadi
            'birth_place'    => 'nullable|string|max:255',
            'birth_date'     => 'nullable|date',
            'address'        => 'nullable|string',
            'gender'         => 'nullable|string|max:20',
            'religion'       => 'nullable|string|max:50',
            'marital_status' => 'nullable|string|max:50',
            'height'  => 'nullable|numeric|min:0|max:300',
            'weight'  => 'nullable|numeric|min:0|max:500',
            'blood_type'     => 'nullable|string|max:3',
            'nationality'    => 'nullable|string|max:50',

            // Relasi: gunakan key sesuai create.blade (education[], experience[], skills[])
            'education' => 'array',
            'education.*.school' => 'required_with:education|string|max:255',
            'education.*.degree' => 'nullable|string|max:255',
            'education.*.year'   => 'nullable|string|max:10',

            'experience' => 'array',
            'experience.*.company' => 'required_with:experience|string|max:255',
            'experience.*.role'    => 'nullable|string|max:255',
            'experience.*.duration'=> 'nullable|string|max:50',
            'experience.*.description' => 'nullable|string',

            'skills' => 'array',
            'skills.*' => 'nullable|string|max:100',
        ]);

        // handle photo
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        // extract relational arrays so we don't pass them to Resume::create
        $educationData = $data['education'] ?? [];
        $experienceData = $data['experience'] ?? [];
        $skillsData = $data['skills'] ?? [];

        unset($data['education'], $data['experience'], $data['skills']);

        // transaction: resume + child records
        DB::beginTransaction();
        try {
            $resume = Resume::create($data);

           if (!empty($educationData)) {
    $educationData = array_filter($educationData, fn($edu) => !empty($edu['school']));
    if ($educationData) {
        $resume->educations()->createMany($educationData);
    }
}

if (!empty($experienceData)) {
    $experienceData = array_filter($experienceData, fn($exp) => !empty($exp['company']));
    if ($experienceData) {
        $resume->experiences()->createMany($experienceData);
    }
}

if (!empty($skillsData)) {
    $skillsData = array_filter($skillsData); // hapus string kosong
    $skillRows = array_map(fn($s) => ['name' => $s], $skillsData);
    if ($skillRows) {
        $resume->skills()->createMany($skillRows);
    }
} 

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            // optional: log error, lalu redirect back dengan pesan
            return back()->withInput()->withErrors(['error' => 'Gagal menyimpan resume: '.$e->getMessage()]);
        }

        return redirect()->route('resume.show', $resume->id);
    }

    public function show(Resume $resume)
    {
        $resume->load(['educations', 'experiences', 'skills']);
        return view('resume.show', compact('resume'));
    }

    public function download($id, Request $req)
    {
      $resume = Resume::with(['educations', 'experiences', 'skills'])->findOrFail($id);
      $template = $req->query('template', 'classic');
      $view = $template === 'modern' ? 'resume.templates.modern' : 'resume.templates.classic';
      
      $pdf = Pdf::loadView($view, compact('resume'))
        ->setPaper('a4', 'potrait');
      
      return $pdf->download('cv-' . $resume->name . '.pdf');
    }
}
