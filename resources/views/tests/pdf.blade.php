<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>John Doe - CV</title>
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
            display: flex;
            width: 100%;
            height: 100%;
            margin: 0 auto;
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);
            border-radius: 0.5rem;
            overflow: hidden;
        }

        /* Kolom kiri */
        .col-left {
            width: 30%;
            background: #1a1a1a;
            color: #eee;
            padding: 2rem 1rem;
            position: relative;
            text-align: left;
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
        }

        .container-pic {
            position: absolute;
            top: 2rem;
            right: -5rem;
            transform: translateX(-50%);
            width: 150px;
            height: 150px;
            border-radius: 50% 0 0 50%;
            background: #fff;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            background: #e2e2e2;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .col-left .spacer {
            margin-top: 11rem;
        }

        /* Kolom kanan */
        .col-right {
            width: 70%;
            background: #fff;
            padding: 2rem;
            display: flex;
            flex-direction: column;
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
    </style>
</head>
<body>
<div class="container">
    <!-- Kolom Kiri -->
    <div class="col-left">
        <div class="container-pic">
            <div class="profile-pic">
                <img src="https://via.placeholder.com/120" alt="photo">
            </div>
        </div>

        <div class="spacer"></div>

        <div class="section">
            <div class="section-title">Pengalaman Kerja</div>
            <div class="item">
                <h4>Software Engineer - Tech Corp</h4>
                <p><i>2020 - 2023</i></p>
                <p>Mengembangkan aplikasi web modern dengan tim Agile.</p>
            </div>
            <div class="item">
                <h4>Frontend Developer - Web Studio</h4>
                <p><i>2018 - 2020</i></p>
                <p>Mengerjakan UI/UX berbasis React dan Vue.</p>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Riwayat Pendidikan</div>
            <div class="item">
                <h4>Sarjana Informatika</h4>
                <p>Universitas Teknologi (2014 - 2018)</p>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan -->
    <div class="col-right">
        <div class="header-info">
            <h1>John Doe</h1>
            <p>+62 812 3456 7890 | john.doe@email.com</p>
        </div>

        <div class="section">
            <div class="section-title">Keahlian</div>
            <ul>
                <li>JavaScript, React, Vue</li>
                <li>PHP, Laravel</li>
                <li>Node.js, Express</li>
                <li>MySQL, PostgreSQL</li>
            </ul>
        </div>

        <div class="section">
            <div class="section-title">Data Pribadi</div>
            <table class="info">
                <tr><td>Tempat Lahir</td><td>:</td><td>Jakarta</td></tr>
                <tr><td>Tanggal Lahir</td><td>:</td><td>01 Januari 1995</td></tr>
                <tr><td>Jenis Kelamin</td><td>:</td><td>Laki-laki</td></tr>
                <tr><td>Alamat</td><td>:</td><td>Jl. Merdeka No. 123, Jakarta</td></tr>
                <tr><td>Tinggi</td><td>:</td><td>175 cm</td></tr>
                <tr><td>Berat</td><td>:</td><td>70 kg</td></tr>
                <tr><td>Agama</td><td>:</td><td>Islam</td></tr>
                <tr><td>Status</td><td>:</td><td>Lajang</td></tr>
                <tr><td>Golongan Darah</td><td>:</td><td>O</td></tr>
                <tr><td>Kewarganegaraan</td><td>:</td><td>Indonesia</td></tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
