<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Preview CV</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="max-w-4xl p-8 mx-auto">
        <!-- Card -->
        <div class="p-8 bg-white border border-gray-200 shadow-xl rounded-xl">
            <!-- Header -->
            <div class="flex items-center justify-between pb-4 mb-6 border-b">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">{{ $resume->name }}</h1>
                    <p class="text-gray-600">{{ $resume->email }} | {{ $resume->phone }}</p>
                </div>
                <a href="{{ route('resume.download', $resume->id) }}" 
                   class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 transition">
                    Download PDF
                </a>
            </div>

            <!-- Summary -->
            <div class="mb-6">
                <h2 class="mb-2 text-xl font-semibold text-indigo-700">Summary</h2>
                <p class="leading-relaxed text-gray-700">{{ $resume->summary }}</p>
            </div>

            <!-- Experience -->
            <div class="mb-6">
                <h2 class="mb-2 text-xl font-semibold text-indigo-700">Experience</h2>
                <p class="leading-relaxed text-gray-700">{{ $resume->experience }}</p>
            </div>

            <!-- Education -->
            <div class="mb-6">
                <h2 class="mb-2 text-xl font-semibold text-indigo-700">Education</h2>
                <p class="leading-relaxed text-gray-700">{{ $resume->education }}</p>
            </div>

            <!-- Skills -->
            <div class="mb-6">
                <h2 class="mb-2 text-xl font-semibold text-indigo-700">Skills</h2>
                <p class="leading-relaxed text-gray-700">{{ $resume->skills }}</p>
            </div>
        </div>

        <!-- Back button -->
        <div class="mt-6">
            <a href="{{ route('resume.create') }}" 
               class="inline-block px-4 py-2 text-gray-800 bg-gray-200 rounded-lg hover:bg-gray-300 transition">
                ← Back to Create
            </a>
        </div>
    </div>
</body>
</html>
