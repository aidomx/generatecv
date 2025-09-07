<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $resume->name }} - CV</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 210mm;
            height: 297mm;
            background: #f5f5f5;
        }
        .container {
            width: 100%;
            height: 100%;
            display: table; /* lebih stabil di PDF */
            box-shadow: 0 0 1rem rgba(0,0,0,0.2);
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .col-left, .col-right {
            display: table-cell;
            vertical-align: top;
        }
        /* Kolom kiri */
        .col-left {
            width: 30%;
            background: #1a1a1a;
            color: #eee;
            padding: 2rem 1rem;
            box-sizing: border-box;
        }
        .profile-wrapper {
            text-align: center;
            margin-bottom: 2rem;
        }
        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            border: 4px solid #fff;
        }
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        /* Kolom kanan */
        .col-right {
            width: 70%;
            background: #fff;
            padding: 2rem;
            box-sizing: border-box;
        }
        .header-info h1 {
            margin: 0;
            font-size: 22pt;
            color: #3498db;
        }
        .header-info p {
            margin: 0;
            font-size: 11pt;
            color: #555;
        }
        /* Section */
        .section {
            margin-bottom: 1.2rem;
        }
        .section-title {
            background: #3498db;
            color: #fff;
            font-weight: bold;
            padding: 0.4rem 0.6rem;
            border-radius: 0.3rem;
            margin-bottom: 0.6rem;
            font-size: 12pt;
        }
        .item {
            margin-bottom: 0.8rem;
        }
        .item h4 {
            margin: 0;
            font-size: 11.5pt;
            color: #fff;
        }
        .item p {
            margin: 0;
            font-size: 10pt;
            color: #ccc;
        }
        .col-right .item h4 {
            color: #000;
        }
        .col-right .item p {
            color: #444;
        }
        ul {
            margin: 0;
            padding-left: 20px;
        }
        ul li {
            font-size: 11pt;
            margin-bottom: 4px;
        }
        table.info {
            width: 100%;
            border-collapse: collapse;
        }
        table.info td {
            padding: 3px 6px;
            vertical-align: top;
            font-size: 10.5pt;
            color: #333;
        }
        table.info td:first-child {
            font-weight: bold;
            width: 130px;
        }
        table.info td:nth-child(2) {
            width: 15px;
            text-align: center;
            color: #aaa;
        }
        .header-info {
          margin-bottom: 1rem;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Kolom Kiri -->
    <div class="col-left">
        <div class="profile-wrapper">
            <div class="profile-pic">
                @if($resume->photo)
                    <img src="{{ public_path('storage/' . $resume->photo) }}" alt="photo">
                @else
                    <img src="https://via.placeholder.com/120" alt="default photo">
                @endif
            </div>
        </div>

        <div class="section">
            <div class="section-title">Pengalaman Kerja</div>
            @foreach($resume->experiences as $exp)
                <div class="item">
                    <h4>{{ $exp->role }} - {{ $exp->company }}</h4>
                    <p><i>{{ $exp->duration }}</i></p>
                    <p>{{ $exp->description }}</p>
                </div>
            @endforeach
        </div>

        <div class="section">
            <div class="section-title">Riwayat Pendidikan</div>
            @foreach($resume->educations as $edu)
                <div class="item">
                    <h4>{{ $edu->degree }}</h4>
                    <p>{{ $edu->school }} ({{ $edu->year }})</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Kolom Kanan -->
    <div class="col-right">
        <div class="header-info">
            <h1>{{ $resume->name }}</h1>
            <p>{{ $resume->phone }} | {{ $resume->email }}</p>
        </div>

        <div class="section">
            <div class="section-title">Keahlian</div>
            <ul>
                @foreach($resume->skills as $skill)
                    <li>{{ $skill->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="section">
            <div class="section-title">Data Pribadi</div>
            <table class="info">
                <tr><td>Tempat Lahir</td><td>:</td><td>{{ $resume->birth_place }}</td></tr>
                <tr><td>Tanggal Lahir</td><td>:</td><td>{{ $resume->birth_date }}</td></tr>
                <tr><td>Jenis Kelamin</td><td>:</td><td>{{ $resume->gender }}</td></tr>
                <tr><td>Alamat</td><td>:</td><td>{{ $resume->address }}</td></tr>
                <tr><td>Tinggi</td><td>:</td><td>{{ $resume->height }} cm</td></tr>
                <tr><td>Berat</td><td>:</td><td>{{ $resume->weight }} kg</td></tr>
                <tr><td>Agama</td><td>:</td><td>{{ $resume->religion }}</td></tr>
                <tr><td>Status</td><td>:</td><td>{{ $resume->marital_status }}</td></tr>
                <tr><td>Golongan Darah</td><td>:</td><td>{{ $resume->blood_type }}</td></tr>
                <tr><td>Kewarganegaraan</td><td>:</td><td>{{ $resume->nationality }}</td></tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
