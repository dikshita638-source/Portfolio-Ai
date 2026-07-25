@props(['href' => '#', 'variant' => 'primary', 'size' => 'md', 'class' => ''])

@php
    $base = 'inline-flex items-center justify-center font-medium rounded-xl transition-all duration-300 cursor-pointer';
    $variants = [
        'primary' => 'bg-gradient-to-r from-primary-500 to-purple-600 text-white hover:from-primary-600 hover:to-purple-700 hover:shadow-lg hover:shadow-primary-500/25 hover:-translate-y-0.5',
        'secondary' => 'bg-white/5 backdrop-blur-xl border border-white/10 text-white hover:bg-white/10 hover:border-white/20 hover:-translate-y-0.5',
        'ghost' => 'text-white/70 hover:text-white hover:bg-white/5',
    ];
    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-3 text-sm',
        'lg' => 'px-8 py-3.5 text-base',
    ];
@endphp

<a href="{{ $href }}"
   class="{{ $base }} {{ $variants[$variant] }} {{ $sizes[$size] }} {{ $class }}"
   {{ $attributes }}>
    {{ $slot }}
</a>
