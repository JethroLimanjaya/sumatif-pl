<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold text-center mb-8">Daftar Siswa</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
        @foreach ($students as $student)
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="w-full h-48 object-cover rounded mb-4">
                <h2 class="text-xl font-semibold">{{ $student['nama'] }}</h2>
                <p><strong>Kelas:</strong> {{ $student['kelas'] }}</p>
                <p><strong>Hobi:</strong> {{ $student['hobi'] }}</p>
                <p class="text-sm mt-2 text-gray-600">{{ $student['deskripsi'] }}</p>
                <a href="/students/{{ $student['id'] }}" class="text-blue-500 hover:underline mt-2 inline-block">Lihat Detail</a>
            </div>
        @endforeach
    </div>
</body>
</html>
