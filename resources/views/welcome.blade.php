@extends("layouts.app")

@section("title", "Generate CV")

@section("content")

    <div class="p-8 text-center bg-white shadow-lg rounded-2xl">
        <h1 class="mb-4 text-3xl font-bold text-gray-800">Selamat Datang di GenerateCV</h1>
        <p class="mb-6 text-gray-600">Buat Curriculum Vitae profesional kamu secara cepat dan gratis. Isi data → Preview → Download PDF.</p>
        
        <a href="{{ route('resume.create') }}"
           class="px-6 py-3 text-white bg-blue-600 rounded-xl hover:bg-blue-700 transition">
           Mulai Buat CV
        </a>
    </div>

@endsection
