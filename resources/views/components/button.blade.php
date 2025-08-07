@props(['href' => '#'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700']) }}>
    {{ $slot }}
</a>
