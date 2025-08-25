<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Buat CV</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-full max-w-2xl p-8 bg-white shadow-lg rounded-2xl">
        <h1 class="mb-6 text-3xl font-bold text-center text-gray-800">Formulir CV</h1>

        <form action="{{ route('resume.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Nama -->
            <div>
                <label for="name" class="block mb-2 font-semibold text-gray-700">Nama Lengkap</label>
                <input type="text" id="name" name="name"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                       placeholder="Masukkan nama lengkap" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block mb-2 font-semibold text-gray-700">Email</label>
                <input type="email" id="email" name="email"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                       placeholder="Masukkan email" required>
            </div>

            <!-- Nomor HP -->
            <div>
                <label for="phone" class="block mb-2 font-semibold text-gray-700">Nomor HP</label>
                <input type="text" id="phone" name="phone"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                       placeholder="Masukkan nomor HP" required>
            </div>

            <!-- Pendidikan -->
            <div>
                <label for="education" class="block mb-2 font-semibold text-gray-700">Pendidikan</label>
                <textarea id="education" name="education" rows="3"
                          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                          placeholder="Contoh: S1 Teknik Informatika - Universitas XYZ (2018-2022)"></textarea>
            </div>

            <!-- Pengalaman -->
            <div>
                <label for="experience" class="block mb-2 font-semibold text-gray-700">Pengalaman</label>
                <textarea id="experience" name="experience" rows="3"
                          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                          placeholder="Contoh: Web Developer di PT ABC (2022-Sekarang)"></textarea>
            </div>

            <!-- Skills -->
            <div>
                <label for="skills" class="block mb-2 font-semibold text-gray-700">Skill</label>
                <textarea id="skills" name="skills" rows="2"
                          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                          placeholder="Contoh: Laravel, React, Tailwind, MySQL"></textarea>
            </div>

            <!-- Tombol -->
            <div class="text-center">
                <button type="submit"
                        class="px-8 py-3 text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 transition">
                    Generate CV
                </button>
            </div>
        </form>
    </div>

</body>
</html>
