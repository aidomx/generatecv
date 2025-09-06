@extends("layouts.app")

@section("title", "Preview CV")

@section("content")
<div class="max-w-5xl mx-auto">
    <!-- Card -->
    <div class="overflow-hidden bg-white border border-gray-200 shadow-xl rounded-xl grid grid-cols-1 md:grid-cols-3">

        <!-- Sidebar kiri -->
        <div class="flex flex-col items-center p-6 text-white bg-indigo-600 md:items-start">
            @if($resume->photo)
                <img src="{{ asset('storage/' . $resume->photo) }}"
                     alt="Foto {{ $resume->name }}"
                     class="object-cover w-32 h-32 mb-4 shadow-md rounded-md">
            @endif

            <h1 class="mb-1 text-2xl font-bold text-center md:text-left">{{ $resume->name }}</h1>
            <p class="mb-1 text-sm">{{ $resume->email }}</p>
            <p class="text-sm">{{ $resume->phone }}</p>

            <!-- Skills -->
            @if($resume->skills->count())
            <div class="w-full mt-6">
                <h2 class="mb-2 text-lg font-semibold">Skills</h2>
                <ul class="text-sm list-disc list-inside space-y-1">
                    @foreach($resume->skills as $skill)
                        <li>{{ $skill->name }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Download dropdown -->
<div class="relative w-full mt-6">
    <details class="w-full">
        <summary
            class="flex items-center justify-between w-full px-4 py-2 text-indigo-700 bg-white rounded-lg cursor-pointer hover:bg-gray-100 transition">
            Download CV
            <svg class="w-4 h-4 ml-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 9l-7 7-7-7" />
            </svg>
        </summary>
        <ul class="mt-2 bg-white border border-gray-200 shadow-lg rounded-md">
            <li>
                <a href="{{ route('resume.download', ['id' => $resume->id, 'template' => 'classic']) }}"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    Classic Template
                </a>
            </li>
            <li>
                <a href="{{ route('resume.download', ['id' => $resume->id, 'template' => 'modern']) }}"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    Modern Template
                </a>
            </li>
        </ul>
    </details>
</div>

                    </div>

        <!-- Konten kanan -->
        <div class="p-6 col-span-2 space-y-8">
            <!-- Summary -->
            @if($resume->summary)
            <div>
                <h2 class="mb-2 text-xl font-semibold text-indigo-700">Summary</h2>
                <p class="leading-relaxed text-gray-700">{{ $resume->summary }}</p>
            </div>
            @endif

           <!-- Personal Information -->
<div>
    <h2 class="mb-2 text-xl font-semibold text-indigo-700">Personal Information</h2>
    <table class="text-sm">
        <tbody class="text-gray-700">
            @if($resume->birth_place || $resume->birth_date)
                <tr>
                    <td class="w-48 pr-2 font-medium">Tempat, Tanggal Lahir</td>
                    <td class="w-4 text-center">:</td>
                    <td>{{ $resume->birth_place }}{{ $resume->birth_date ? ', ' . \Carbon\Carbon::parse($resume->birth_date)->format('d M Y') : '' }}</td>
                </tr>
            @endif
            @if($resume->address)
                <tr>
                    <td class="w-48 pr-2 font-medium">Alamat</td>
                    <td class="w-4 text-center">:</td>
                    <td>{{ $resume->address }}</td>
                </tr>
            @endif
            @if($resume->gender)
                <tr>
                    <td class="w-48 pr-2 font-medium">Jenis Kelamin</td>
                    <td class="w-4 text-center">:</td>
                    <td>{{ $resume->gender }}</td>
                </tr>
            @endif
            @if($resume->religion)
                <tr>
                    <td class="w-48 pr-2 font-medium">Agama</td>
                    <td class="w-4 text-center">:</td>
                    <td>{{ $resume->religion }}</td>
                </tr>
            @endif
            @if($resume->marital_status)
                <tr>
                    <td class="w-48 pr-2 font-medium">Status</td>
                    <td class="w-4 text-center">:</td>
                    <td>{{ $resume->marital_status }}</td>
                </tr>
            @endif
            @if($resume->height || $resume->weight)
                <tr>
                    <td class="w-48 pr-2 font-medium">Tinggi / Berat</td>
                    <td class="w-4 text-center">:</td>
                    <td>
                        {{ $resume->height ? $resume->height . ' cm' : '' }}
                        {{ $resume->weight ? '/ ' . $resume->weight . ' kg' : '' }}
                    </td>
                </tr>
            @endif
            @if($resume->blood_type)
                <tr>
                    <td class="w-48 pr-2 font-medium">Gol. Darah</td>
                    <td class="w-4 text-center">:</td>
                    <td>{{ $resume->blood_type }}</td>
                </tr>
            @endif
            @if($resume->nationality)
                <tr>
                    <td class="w-48 pr-2 font-medium">Kewarganegaraan</td>
                    <td class="w-4 text-center">:</td>
                    <td>{{ $resume->nationality }}</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

            <!-- Experience -->
            @if($resume->experiences->count())
            <div>
                <h2 class="mb-2 text-xl font-semibold text-indigo-700">Experience</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-3 py-2 border">Company</th>
                                <th class="px-3 py-2 border">Role</th>
                                <th class="px-3 py-2 border">Duration</th>
                                <th class="px-3 py-2 border">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($resume->experiences as $exp)
                                <tr>
                                    <td class="px-3 py-2 border">{{ $exp->company }}</td>
                                    <td class="px-3 py-2 border">{{ $exp->role }}</td>
                                    <td class="px-3 py-2 border">{{ $exp->duration }}</td>
                                    <td class="px-3 py-2 border">{{ $exp->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif

            <!-- Education -->
            @if($resume->educations->count())
            <div>
                <h2 class="mb-2 text-xl font-semibold text-indigo-700">Education</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-3 py-2 border">School</th>
                                <th class="px-3 py-2 border">Degree</th>
                                <th class="px-3 py-2 border">Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($resume->educations as $edu)
                                <tr>
                                    <td class="px-3 py-2 border">{{ $edu->school }}</td>
                                    <td class="px-3 py-2 border">{{ $edu->degree }}</td>
                                    <td class="px-3 py-2 border">{{ $edu->year }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Back button -->
    <div class="mt-4">
      <a href="{{ route('resume.create') }}" class="inline-block px-4 py-2 text-gray-800 bg-white rounded-lg hover:bg-gray-300 transition"> ← Back to Create
      </a>
    </div>
</div>
@endsection
