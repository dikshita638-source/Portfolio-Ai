@props(['title', 'subtitle' => ''])

<div class="text-center mb-16 md:mb-20" data-aos="fade-up" data-aos-duration="800">
    @if($subtitle)
        <span class="inline-block px-4 py-1.5 text-xs font-mono tracking-widest uppercase text-primary-400 bg-primary-500/10 border border-primary-500/20 rounded-full mb-4">
            {{ $subtitle }}
        </span>
    @endif
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white mb-4">
        {{ $title }}
    </h2>
    <div class="w-20 h-1 bg-gradient-to-r from-primary-500 to-purple-500 mx-auto rounded-full"></div>
</div>
