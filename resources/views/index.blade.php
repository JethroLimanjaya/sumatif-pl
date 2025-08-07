@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
    <div class="space-y-6">
        @foreach ($students as $student)
            <div class="bg-white rounded-xl shadow p-4 flex items-start space-x-4">
                <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="w-32 h-32 rounded-md object-cover">
                <div>
                    <h2 class="text-xl font-semibold">{{ $student['nama'] }}</h2>
                    <p class="text-gray-600"><strong>Kelas:</strong> {{ $student['kelas'] }}</p>
                    <p class="text-gray-600"><strong>Hobi:</strong> {{ $student['hobi'] }}</p>
                    <p class="text-gray-600 mt-2">{{ $student['deskripsi'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
