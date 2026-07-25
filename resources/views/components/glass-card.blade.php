@props(['class' => ''])

<div class="glass-card {{ $class }}" {{ $attributes }}>
    {{ $slot }}
</div>
