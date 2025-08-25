<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
      $resume = Resume::create($request->all());
      return redirect()->route('resume.show', $resume->id);
    }
    
    public function download(Resume $resume)
    {
      $pdf = Pdf::loadView('resume.pdf', compact('resume'));
      return $pdf->download('cv-'.$resume->name.'.pdf');
    }
    
    public function show(Resume $resume)
    {
      return view('resume.show', compact('resume'));
    }
}
