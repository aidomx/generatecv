<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $resume->name }} - CV</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">
    <div class="max-w-4xl mx-auto bg-white shadow-lg">
        
        <!-- Header -->
        <div class="relative overflow-hidden text-white bg-blue-600">
            <!-- Lingkaran dekorasi -->
            <div class="absolute bg-blue-700 rounded-full -top-20 -left-20 w-72 h-72"></div>
            <div class="absolute w-32 h-32 bg-blue-500 rounded-full top-10 left-56 opacity-80"></div>

            <!-- Kontak bar -->
            <div class="relative z-10 flex justify-end p-4 text-sm space-x-6">
                <span>{{ $resume->phone }}</span>
                <span>{{ $resume->address }}</span>
                <span>{{ $resume->email }}</span>
                @if($resume->website)
                    <span>{{ $resume->website }}</span>
                @endif
            </div>

            <!-- Foto + Info -->
            <div class="relative z-10 flex items-center px-10 pb-10">
                <!-- Foto -->
                <div class="-ml-6 overflow-hidden bg-gray-200 border-4 border-white rounded-full w-28 h-28">
                    @if($resume->photo)
                        <img src="{{ asset('storage/'.$resume->photo) }}" alt="Photo" class="object-cover w-full h-full">
                    @endif
                </div>

                <!-- Nama & Summary -->
                <div class="ml-8">
                    <h1 class="text-3xl font-bold uppercase">{{ $resume->name }}</h1>
                    <p class="text-lg">{{ $resume->email }}</p>
                                    </div>
            </div>
        </div>

        <!-- Body -->
        <div class="p-10 grid grid-cols-3 gap-8">
            <!-- Left Column -->
            <div class="col-span-2 space-y-8">
                <!-- Experience -->
                <div>
                    <h2 class="mb-4 text-xl font-bold text-blue-600 border-b-2 border-blue-600">Experience</h2>
                    @foreach($resume->experiences as $exp)
                        <div class="mb-4">
                            <div class="flex justify-between">
                                <h3 class="font-semibold">{{ $exp->position }}</h3>
                                <span class="text-sm text-gray-500">{{ $exp->start_date }} - {{ $exp->end_date ?? 'Present' }}</span>
                            </div>
                            <p class="text-gray-700">{{ $exp->company }}</p>
                            <p class="text-sm text-gray-600">{{ $exp->description }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Education -->
                <div>
                    <h2 class="mb-4 text-xl font-bold text-blue-600 border-b-2 border-blue-600">Education</h2>
                    @foreach($resume->educations as $edu)
                        <div class="mb-4">
                            <div class="flex justify-between">
                                <h3 class="font-semibold">{{ $edu->degree }}</h3>
                                <span class="text-sm text-gray-500">{{ $edu->year }}</span>
                            </div>
                            <p class="text-gray-700">{{ $edu->school }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-8">
                <!-- Skills -->
                <div>
                    <h2 class="mb-4 text-xl font-bold text-blue-600 border-b-2 border-blue-600">Skills</h2>
                    @foreach($resume->skills as $skill)
                        <div class="mb-3">
                            <p class="text-sm font-medium">{{ $skill->name }}</p>
                            <div class="w-full h-2 bg-gray-200 rounded">
                                <div class="h-2 bg-blue-600 rounded" style="width: {{ $skill->level }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Kontak -->
                <div>
                    <h2 class="mb-4 text-xl font-bold text-blue-600 border-b-2 border-blue-600">Kontak</h2>
                    <ul class="text-sm space-y-2">
                        @if($resume->facebook)
                            <li>Facebook: {{ $resume->facebook }}</li>
                        @endif
                        @if($resume->twitter)
                            <li>Twitter: {{ $resume->twitter }}</li>
                        @endif
                        @if($resume->linkedin)
                            <li>LinkedIn: {{ $resume->linkedin }}</li>
                        @endif
                        @if($resume->website)
                            <li>Website: {{ $resume->website }}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
