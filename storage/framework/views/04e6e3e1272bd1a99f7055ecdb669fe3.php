<?php
    $projects = [
        [
            'title' => 'Portfolio Website',
            'description' => 'A modern, responsive portfolio website built with Laravel, Blade, and Tailwind CSS. Features glassmorphism design, smooth animations, and premium UI.',
            'long_description' => 'A premium personal portfolio website featuring dark theme, glassmorphism cards, animated typing effect, scroll-triggered animations, particle background, cursor glow effect, and fully responsive design. Built with modern web technologies for optimal performance.',
            'tech' => ['Laravel', 'Blade', 'Tailwind CSS', 'Vite', 'Alpine.js'],
            'github' => '#',
            'demo' => '#',
            'features' => ['Dark theme with glassmorphism', 'Animated typing effect', 'Scroll-triggered animations', 'Particle background', 'Responsive design', 'SEO optimized'],
        ],
        [
            'title' => 'AI Interior Design Platform',
            'description' => 'An AI-powered platform that generates interior design suggestions based on user preferences and room dimensions.',
            'long_description' => 'An innovative platform leveraging artificial intelligence to provide personalized interior design recommendations. Users can upload room photos and receive AI-generated design suggestions including furniture placement, color schemes, and decor ideas.',
            'tech' => ['Python', 'TensorFlow', 'HTML', 'CSS', 'JavaScript'],
            'github' => '#',
            'demo' => '#',
            'features' => ['AI-powered design suggestions', 'Room photo upload', 'Furniture placement AI', 'Color scheme generation', '3D visualization', 'User preference learning'],
        ],
        [
            'title' => 'Rapid Fire Quiz Web App',
            'description' => 'A real-time quiz application with timer functionality, score tracking, leaderboard, and dynamic question management.',
            'long_description' => 'An engaging real-time quiz application featuring countdown timers, instant scoring, dynamic question banks, user authentication, leaderboard system, and performance analytics.',
            'tech' => ['JavaScript', 'HTML', 'CSS', 'MySQL', 'PHP'],
            'github' => '#',
            'demo' => '#',
            'features' => ['Real-time countdown timer', 'Dynamic question banks', 'Leaderboard system', 'User authentication', 'Score analytics', 'Multi-category support'],
        ],
        [
            'title' => 'Gymkhana Transparency System',
            'description' => 'A web-based system for managing and displaying club activities, budgets, and decisions transparently.',
            'long_description' => 'A comprehensive transparency system designed for student gymkhana organizations. Features include budget tracking, activity logging, decision documentation, member management, and public dashboards.',
            'tech' => ['Laravel', 'Blade', 'MySQL', 'Tailwind CSS', 'JavaScript'],
            'github' => '#',
            'demo' => '#',
            'features' => ['Budget tracking', 'Activity logging', 'Decision documentation', 'Member management', 'Public dashboards', 'Report generation'],
        ],
    ];
?>

<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div id="project-modal-<?php echo e($index); ?>"
         class="fixed inset-0 z-[200] hidden items-center justify-center p-4"
         onclick="if(event.target === this) closeProjectModal(<?php echo e($index); ?>)">
        <div class="absolute inset-0 bg-dark-950/80 backdrop-blur-sm" onclick="closeProjectModal(<?php echo e($index); ?>)"></div>

        <div class="relative w-full max-w-2xl max-h-[85vh] overflow-y-auto glass-card rounded-3xl border border-white/10 p-8 transform transition-all duration-300">
            
            <button onclick="closeProjectModal(<?php echo e($index); ?>)"
                    class="absolute top-4 right-4 w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 transition-all duration-300 cursor-pointer z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            
            <div class="w-full h-48 rounded-2xl bg-gradient-to-br from-primary-500/10 to-purple-500/10 border border-white/5 flex items-center justify-center mb-6">
                <svg class="w-16 h-16 text-white/10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>

            
            <h3 class="text-2xl font-display font-bold text-white mb-3"><?php echo e($project['title']); ?></h3>
            <p class="text-white/50 text-sm leading-relaxed mb-6"><?php echo e($project['long_description']); ?></p>

            
            <div class="mb-6">
                <h4 class="text-sm font-semibold text-white/60 uppercase tracking-wider mb-3">Key Features</h4>
                <div class="grid grid-cols-2 gap-2">
                    <?php $__currentLoopData = $project['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-2 text-sm text-white/40">
                            <svg class="w-4 h-4 text-primary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <?php echo e($feature); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <div class="mb-8">
                <h4 class="text-sm font-semibold text-white/60 uppercase tracking-wider mb-3">Tech Stack</h4>
                <div class="flex flex-wrap gap-2">
                    <?php $__currentLoopData = $project['tech']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="px-3 py-1.5 text-xs font-mono text-primary-300/80 bg-primary-500/10 rounded-lg border border-primary-500/10">
                            <?php echo e($tech); ?>

                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <div class="flex items-center gap-3">
                <a href="<?php echo e($project['github']); ?>"
                   class="inline-flex items-center gap-2 px-6 py-3 text-sm font-medium text-white bg-white/5 border border-white/10 rounded-xl hover:bg-white/10 hover:border-white/20 transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    View Code
                </a>
                <a href="<?php echo e($project['demo']); ?>"
                   class="inline-flex items-center gap-2 px-6 py-3 text-sm font-medium bg-gradient-to-r from-primary-500 to-purple-600 text-white rounded-xl hover:from-primary-600 hover:to-purple-700 transition-all duration-300 hover:shadow-lg hover:shadow-primary-500/25">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    Live Demo
                </a>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH E:\portfolio-ai\resources\views/components/project-modal.blade.php ENDPATH**/ ?>