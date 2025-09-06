<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Curriculum Vitae - {{ $resume->name }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            line-height: 1.5;
            margin: 25px;
        }
        h1 {
            font-size: 18px;
            margin-bottom: 8px;
            text-transform: uppercase;
        }
        h2 {
            font-size: 15px;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 10px;
        }
        td {
            padding: 3px 5px;
            vertical-align: top;
        }
        .flex {
            display: table;
            width: 100%;
        }
        .flex > div {
            display: table-cell;
            vertical-align: top;
        }
        .private-data {
            width: 70%;
        }
        .private-data table td:first-child {
            width: 210px;
        }
        .pp {
            width: 120px;
            height: 150px;
            object-fit: cover;
            border: 1px solid #000;
            margin-left: 15px;
        }
        ul {
            margin: 5px 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Curriculum Vitae</h1>

    <div class="flex justify-start border-0">
        <div class="private-data">
            <h1>DATA PRIBADI</h1>
            <table>
                <tbody>
                    <tr>
                        <td>NAMA</td><td>:</td><td>{{ $resume->name }}</td>
                    </tr>
                    <tr>
                        <td>TEMPAT, TANGGAL LAHIR</td><td>:</td><td>{{ $resume->birth_place }}, {{ $resume->birth_date }}</td>
                    </tr>
                    <tr class="address">
                        <td>ALAMAT</td><td>:</td><td>{{ $resume->address }}</td>
                    </tr>
                    <tr>
                        <td>E-MAIL</td><td>:</td><td>{{ $resume->email }}</td>
                    </tr>
                    <tr>
                        <td>NO. HANDPHONE</td><td>:</td><td>{{ $resume->phone }}</td>
                    </tr>
                    <tr>
                        <td>JENIS KELAMIN</td><td>:</td><td>{{ $resume->gender }}</td>
                    </tr>
                    <tr>
                        <td>AGAMA</td><td>:</td><td>{{ $resume->religion }}</td>
                    </tr>
                    <tr>
                        <td>STATUS</td><td>:</td><td>{{ $resume->marital_status }}</td>
                    </tr>
                    <tr>
                        <td>TINGGI/BERAT BADAN</td><td>:</td><td>{{ $resume->height }}cm / {{ $resume->weight }}kg</td>
                    </tr>
                    <tr>
                        <td>GOLONGAN DARAH</td><td>:</td><td>{{ $resume->blood_type }}</td>
                    </tr>
                    <tr>
                        <td>KEWARGANEGARAAN</td><td>:</td><td>{{ $resume->nationality }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            @if($resume->photo)
                <img src="file://{{ public_path('storage/' . $resume->photo) }}" class="pp" alt="Foto {{ $resume->name }}">
            @endif
        </div>
    </div>

    <div class="study">
        <h1>RIWAYAT PENDIDIKAN</h1>
        <h2>Formal :</h2>
        <table>
            <tbody>
                @foreach($resume->educations as $edu)
                    <tr>
                        <td width="210">{{ $edu->year }}</td>
                        <td>:</td>
                        <td>{{ $edu->school }} ({{ $edu->degree }})</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="study">
        <h1>PENGALAMAN KERJA</h1>
        <table>
            <tbody>
                @foreach($resume->experiences as $exp)
                    <tr>
                        <td width="210">{{ $exp->duration }}</td>
                        <td>:</td>
                        <td>{{ $exp->company }} - {{ $exp->role }} - {{ $exp->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="skill">
        <h1>KEAHLIAN / SKILL</h1>
        <ul>
            @foreach($resume->skills as $skill)
                <li>{{ trim($skill->name) }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
