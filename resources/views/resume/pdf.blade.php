<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CV - {{ $resume->name }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            line-height: 1.4;
        }
        h1, h2, h3 {
            margin-bottom: 5px;
        }
        .section {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>{{ $resume->name }}</h1>
    <p>Email: {{ $resume->email }}</p>
    <p>Phone: {{ $resume->phone }}</p>

    <div class="section">
        <h3>Pendidikan</h3>
        <p>{{ $resume->education }}</p>
    </div>

    <div class="section">
        <h3>Pengalaman</h3>
        <p>{{ $resume->experience }}</p>
    </div>

    <div class="section">
        <h3>Skills</h3>
        <p>{{ $resume->skills }}</p>
    </div>
</body>
</html>
