<h1>{{ $resume->name }}</h1>
<p>Email: {{ $resume->email }}</p>
<p>Phone: {{ $resume->phone }}</p>

<h3>Pendidikan</h3>
<p>{{ $resume->education }}</p>

<h3>Pengalaman</h3>
<p>{{ $resume->experience }}</p>

<h3>Skill</h3>
<p>{{ $resume->skills }}</p>

<a href="{{ route('resume.download', $resume->id) }}">Download PDF</a>
