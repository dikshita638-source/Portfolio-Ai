<section id="home" class="min-h-screen flex items-center relative overflow-hidden pt-20">
    
    <canvas id="particles-canvas" class="absolute inset-0 z-0"></canvas>

    
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-500/5 via-dark-950 to-purple-500/5 animate-gradient bg-[length:200%_200%]"></div>
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary-500/10 rounded-full blur-[120px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            
            <div data-aos="fade-down" data-aos-delay="200" class="inline-flex items-center gap-2 px-4 py-2 bg-primary-500/10 border border-primary-500/20 rounded-full mb-8">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm text-white/70 font-medium">Open to opportunities</span>
            </div>

            
            <h1 data-aos="fade-up" data-aos-delay="300" class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-display font-bold mb-6 leading-tight">
                <span class="text-white">Hi, I'm </span>
                <span class="bg-gradient-to-r from-primary-400 via-purple-400 to-violet-400 bg-clip-text text-transparent">Dikshita</span>
            </h1>

            
            <p data-aos="fade-up" data-aos-delay="400" class="text-lg md:text-xl text-white/50 mb-4 font-light">
                Second-Year B.Tech Computer Science
                <span class="text-primary-400 font-medium">(Cyber Security)</span>
            </p>

            
            <div data-aos="fade-up" data-aos-delay="500" class="h-12 flex items-center justify-center mb-10">
                <span class="text-xl md:text-2xl text-white/70 font-mono">
                    <span id="typed-prefix" class="text-primary-400">&gt;&gt;</span>
                    <span id="typed-text" class="text-white"></span>
                    <span id="typed-cursor" class="text-primary-400 animate-pulse">|</span>
                </span>
            </div>

            
            <p data-aos="fade-up" data-aos-delay="600" class="text-base md:text-lg text-white/40 max-w-2xl mx-auto mb-12 leading-relaxed">
                Curious mind with a passion for building impactful digital products.
                I love solving problems, exploring AI, and continuously learning modern technologies to create
                <span class="text-white/60 font-medium">innovative solutions</span>.
            </p>

            
            <div data-aos="fade-up" data-aos-delay="700" class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#projects"
                   class="group inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-primary-500 to-purple-600 text-white font-semibold rounded-2xl hover:from-primary-600 hover:to-purple-700 transition-all duration-300 hover:shadow-xl hover:shadow-primary-500/25 hover:-translate-y-1">
                    View Projects
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <?php if($resumeAvailable): ?>
                    <a href="<?php echo e(route('resume.download')); ?>"
                       target="_blank"
                       class="group inline-flex items-center gap-2 px-8 py-4 bg-white/5 backdrop-blur-xl border border-white/10 text-white font-semibold rounded-2xl hover:bg-white/10 hover:border-white/20 transition-all duration-300 hover:-translate-y-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Download Resume
                    </a>
                <?php else: ?>
                    <span title="Resume coming soon"
                          class="group inline-flex items-center gap-2 px-8 py-4 bg-white/5 backdrop-blur-xl border border-white/5 text-white/30 font-semibold rounded-2xl cursor-not-allowed">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Download Resume
                    </span>
                <?php endif; ?>
            </div>

            
            <div data-aos="fade-up" data-aos-delay="1000" class="mt-20 animate-bounce">
                <a href="#about" class="inline-flex flex-col items-center gap-2 text-white/30 hover:text-white/50 transition-colors">
                    <span class="text-xs font-mono tracking-widest uppercase">Scroll Down</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<?php /**PATH E:\portfolio-ai\resources\views/sections/hero.blade.php ENDPATH**/ ?>