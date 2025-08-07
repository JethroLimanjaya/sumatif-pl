<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <a href="/students" class="text-blue-600 hover:underline mb-4 inline-block">← Kembali ke Daftar</a>

    <div class="bg-white shadow rounded-lg p-6 max-w-xl mx-auto">
        <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="w-full h-60 object-cover rounded mb-4">
        <h1 class="text-2xl font-bold mb-2">{{ $student['nama'] }}</h1>
        <p><strong>Kelas:</strong> {{ $student['kelas'] }}</p>
        <p><strong>Username:</strong> {{ $student['username'] }}</p>
        <p><strong>Hobi:</strong> {{ $student['hobi'] }}</p>
        <p class="mt-4 text-gray-700">{{ $student['deskripsi'] }}</p>
    </div>
</body>
</html>
