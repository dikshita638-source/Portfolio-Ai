<nav id="navbar"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-500"
     x-data="{ open: false, scrolled: false, activeSection: 'home' }"
     x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 50;
            const sections = document.querySelectorAll('section[id]');
            sections.forEach(section => {
                const top = section.offsetTop - 100;
                if (window.scrollY >= top) {
                    activeSection = section.getAttribute('id');
                }
            });
        });
     ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <a href="#home"
               class="text-2xl font-display font-bold bg-gradient-to-r from-primary-400 to-purple-400 bg-clip-text text-transparent hover:from-primary-300 hover:to-purple-300 transition-all duration-300">
                Dikshita
            </a>

            
            <div class="hidden lg:flex items-center gap-1">
                <?php
                    $navLinks = [
                        ['id' => 'home', 'label' => 'Home'],
                        ['id' => 'about', 'label' => 'About'],
                        ['id' => 'skills', 'label' => 'Skills'],
                        ['id' => 'projects', 'label' => 'Projects'],
                        ['id' => 'experience', 'label' => 'Experience'],
                        ['id' => 'certificates', 'label' => 'Certificates'],
                        ['id' => 'achievements', 'label' => 'Achievements'],
                        ['id' => 'contact', 'label' => 'Contact'],
                    ];
                ?>

                <?php $__currentLoopData = $navLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#<?php echo e($link['id']); ?>"
                       class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300"
                       :class="activeSection === '<?php echo e($link['id']); ?>' ? 'text-primary-400 bg-primary-500/10' : 'text-white/60 hover:text-white hover:bg-white/5'">
                        <?php echo e($link['label']); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="hidden lg:flex items-center">
                <?php if($resumeAvailable): ?>
                    <a href="<?php echo e(route('resume.download')); ?>"
                       target="_blank"
                       class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium bg-gradient-to-r from-primary-500 to-purple-600 text-white rounded-xl hover:from-primary-600 hover:to-purple-700 transition-all duration-300 hover:shadow-lg hover:shadow-primary-500/25 hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Resume
                    </a>
                <?php else: ?>
                    <span title="Resume coming soon"
                          class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium bg-white/5 text-white/30 rounded-xl cursor-not-allowed">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Resume
                    </span>
                <?php endif; ?>
            </div>

            
            <button @click="open = !open"
                    class="lg:hidden relative w-10 h-10 flex items-center justify-center text-white/70 hover:text-white transition-colors rounded-lg hover:bg-white/5 cursor-pointer"
                    aria-label="Toggle menu">
                <div class="w-5 flex flex-col gap-1.5 transition-all duration-300"
                     :class="open ? 'rotate-45' : ''">
                    <span class="w-full h-0.5 bg-current transition-all duration-300"
                          :class="open ? 'translate-y-[4px]' : ''"></span>
                    <span class="w-full h-0.5 bg-current transition-all duration-300"
                          :class="open ? 'opacity-0' : ''"></span>
                    <span class="w-full h-0.5 bg-current transition-all duration-300"
                          :class="open ? '-translate-y-[4px] -rotate-90' : ''"></span>
                </div>
            </button>
        </div>
    </div>

    
    <div x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         @click.outside="open = false"
         class="lg:hidden bg-dark-950/95 backdrop-blur-2xl border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 py-6 space-y-1">
            <?php $__currentLoopData = $navLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#<?php echo e($link['id']); ?>"
                   @click="open = false"
                   class="block px-4 py-3 text-base font-medium rounded-xl transition-all duration-300"
                   :class="activeSection === '<?php echo e($link['id']); ?>' ? 'text-primary-400 bg-primary-500/10' : 'text-white/60 hover:text-white hover:bg-white/5'">
                    <?php echo e($link['label']); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="pt-4 px-4">
                <?php if($resumeAvailable): ?>
                    <a href="<?php echo e(route('resume.download')); ?>"
                       target="_blank"
                       class="flex items-center justify-center gap-2 w-full px-5 py-3 text-sm font-medium bg-gradient-to-r from-primary-500 to-purple-600 text-white rounded-xl hover:from-primary-600 hover:to-purple-700 transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Download Resume
                    </a>
                <?php else: ?>
                    <span title="Resume coming soon"
                          class="flex items-center justify-center gap-2 w-full px-5 py-3 text-sm font-medium bg-white/5 text-white/30 rounded-xl cursor-not-allowed">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Download Resume
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    
    <style>
        #navbar.scrolled {
            background: rgba(2, 6, 23, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        });
    </script>
</nav>
<?php /**PATH E:\portfolio-ai\resources\views/components/navbar.blade.php ENDPATH**/ ?>