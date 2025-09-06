@extends("layouts.app")

@section("title", "Buat CV")

@section("content")
<div class="w-full max-w-3xl p-8 bg-white shadow-lg rounded-2xl">
    <h1 class="mb-6 text-3xl font-bold text-center text-gray-800">Formulir CV</h1>

    <form action="{{ route('resume.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
        @csrf

        <!-- === Data Utama === -->
        <div>
            <label for="name" class="block mb-2 font-semibold text-gray-700">Nama Lengkap</label>
            <input type="text" id="name" name="name"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                   required>
        </div>

        <div>
            <label for="email" class="block mb-2 font-semibold text-gray-700">Email</label>
            <input type="email" id="email" name="email"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                   required>
        </div>

        <div>
            <label for="phone" class="block mb-2 font-semibold text-gray-700">Nomor HP</label>
            <input type="text" id="phone" name="phone"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                   required>
        </div>

        <!-- Upload Foto -->
        <div>
            <label for="photo" class="block mb-2 font-semibold text-gray-700">Upload Foto</label>
            <input type="file" name="photo" id="photo"
                   class="w-full p-2 border-gray-300 rounded">
        </div>

        <!-- === Data Pribadi === -->
        <h2 class="mt-8 text-xl font-bold text-gray-800">Data Pribadi</h2>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="birth_place" class="block mb-2">Tempat Lahir</label>
                <input type="text" id="birth_place" name="birth_place" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div>
                <label for="birth_date" class="block mb-2">Tanggal Lahir</label>
                <input type="date" id="birth_date" name="birth_date" class="w-full px-4 py-2 border rounded-lg">
            </div>
        </div>

        <div>
            <label for="address" class="block mb-2">Alamat</label>
            <textarea id="address" name="address" rows="2"
                      class="w-full px-4 py-2 border rounded-lg"></textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="gender" class="block mb-2">Jenis Kelamin</label>
                <input type="text" id="gender" name="gender" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div>
                <label for="religion" class="block mb-2">Agama</label>
                <input type="text" id="religion" name="religion" class="w-full px-4 py-2 border rounded-lg">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="marital_status" class="block mb-2">Status Pernikahan</label>
                <input type="text" id="marital_status" name="marital_status" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div>
                <label for="height" class="block mb-2">Tinggi Badan</label>
                <input type="number" id="height" name="height" placeholder="contoh: 170"
                       class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div>
                <label for="weight" class="block mb-2">Berat Badan</label>
                <input type="number" id="weight" name="weight" placeholder="contoh: 65"
                       class="w-full px-4 py-2 border rounded-lg">
            </div>

        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="blood_type" class="block mb-2">Golongan Darah</label>
                <input type="text" id="blood_type" name="blood_type" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div>
                <label for="nationality" class="block mb-2">Kewarganegaraan</label>
                <input type="text" id="nationality" name="nationality" class="w-full px-4 py-2 border rounded-lg">
            </div>
        </div>

        <!-- === Pendidikan === -->
        <h2 class="mt-8 text-xl font-bold text-gray-800">Riwayat Pendidikan</h2>
        <div id="education-section" class="space-y-2">
            <div class="grid grid-cols-3 gap-2">
                <input type="text" name="education[0][school]" placeholder="Sekolah" class="p-2 border rounded">
                <input type="text" name="education[0][degree]" placeholder="Gelar" class="p-2 border rounded">
                <input type="text" name="education[0][year]" placeholder="Tahun" class="p-2 border rounded">
            </div>
        </div>
        <button type="button" onclick="addEducation()" class="px-3 py-1 text-white bg-blue-600 rounded">+ Tambah Pendidikan</button>

        <!-- === Pengalaman === -->
        <h2 class="mt-8 text-xl font-bold text-gray-800">Pengalaman Kerja</h2>
        <div id="experience-section" class="space-y-2">
            <div class="grid grid-cols-4 gap-2">
                <input type="text" name="experience[0][company]" placeholder="Perusahaan" class="p-2 border rounded">
                <input type="text" name="experience[0][role]" placeholder="Jabatan" class="p-2 border rounded">
                <input type="text" name="experience[0][duration]" placeholder="Durasi" class="p-2 border rounded">
                <input type="text" name="experience[0][description]" placeholder="Deskripsi" class="p-2 border rounded">
            </div>
        </div>
        <button type="button" onclick="addExperience()" class="px-3 py-1 text-white bg-blue-600 rounded">+ Tambah Pengalaman</button>

        <!-- === Skills === -->
        <h2 class="mt-8 text-xl font-bold text-gray-800">Skill</h2>
        <div id="skills-section" class="space-y-2">
            <input type="text" name="skills[]" placeholder="Contoh: Laravel"
                   class="w-full p-2 border rounded">
        </div>
        <button type="button" onclick="addSkill()" class="px-3 py-1 text-white bg-blue-600 rounded">+ Tambah Skill</button>

        <!-- Tombol -->
        <div class="mt-6 text-center">
            <button type="submit"
                    class="px-8 py-3 text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 transition">
                Generate CV
            </button>
        </div>
    </form>
</div>

<script>
let eduIndex = 1;
function addEducation() {
    const container = document.getElementById('education-section');
    const div = document.createElement('div');
    div.classList.add('grid','grid-cols-3','gap-2');
    div.innerHTML = `
        <input type="text" name="education[${eduIndex}][school]" placeholder="Sekolah" class="p-2 border rounded">
        <input type="text" name="education[${eduIndex}][degree]" placeholder="Gelar" class="p-2 border rounded">
        <input type="text" name="education[${eduIndex}][year]" placeholder="Tahun" class="p-2 border rounded">
    `;
    container.appendChild(div);
    eduIndex++;
}

let expIndex = 1;
function addExperience() {
    const container = document.getElementById('experience-section');
    const div = document.createElement('div');
    div.classList.add('grid','grid-cols-4','gap-2');
    div.innerHTML = `
        <input type="text" name="experience[${expIndex}][company]" placeholder="Perusahaan" class="p-2 border rounded">
        <input type="text" name="experience[${expIndex}][role]" placeholder="Jabatan" class="p-2 border rounded">
        <input type="text" name="experience[${expIndex}][duration]" placeholder="Durasi" class="p-2 border rounded">
        <input type="text" name="experience[${expIndex}][description]" placeholder="Deskripsi" class="p-2 border rounded">
    `;
    container.appendChild(div);
    expIndex++;
}

function addSkill() {
    const container = document.getElementById('skills-section');
    const input = document.createElement('input');
    input.type = "text";
    input.name = "skills[]";
    input.placeholder = "Contoh: TailwindCSS";
    input.classList.add('w-full','border','p-2','rounded');
    container.appendChild(input);
}
</script>
@endsection
