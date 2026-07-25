@props(['id' => '', 'class' => ''])

<section id="{{ $id }}" class="py-20 md:py-28 relative {{ $class }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
</section>
