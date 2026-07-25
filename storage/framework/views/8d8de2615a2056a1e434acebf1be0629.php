<?php $__env->startComponent('components.section', ['id' => 'projects']); ?>
    <?php if (isset($component)) { $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-title','data' => ['title' => 'My Projects','subtitle' => 'Featured Work']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'My Projects','subtitle' => 'Featured Work']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78)): ?>
<?php $attributes = $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78; ?>
<?php unset($__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78)): ?>
<?php $component = $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78; ?>
<?php unset($__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78); ?>
<?php endif; ?>

    <?php
        $projects = [
            [
                'title' => 'Portfolio Website',
                'description' => 'A modern, responsive portfolio website built with Laravel, Blade, and Tailwind CSS. Features glassmorphism design, smooth animations, and premium UI.',
                'image' => 'portfolio.jpg',
                'tech' => ['Laravel', 'Blade', 'Tailwind CSS', 'Vite', 'Alpine.js'],
                'github' => '#',
                'demo' => '#',
                'long_description' => 'A premium personal portfolio website featuring dark theme, glassmorphism cards, animated typing effect, scroll-triggered animations, particle background, cursor glow effect, and fully responsive design. Built with modern web technologies for optimal performance.',
            ],
            [
                'title' => 'AI Interior Design Platform',
                'description' => 'An AI-powered platform that generates interior design suggestions based on user preferences and room dimensions using machine learning algorithms.',
                'image' => 'ai-interior.jpg',
                'tech' => ['Python', 'TensorFlow', 'HTML', 'CSS', 'JavaScript'],
                'github' => '#',
                'demo' => '#',
                'long_description' => 'An innovative platform leveraging artificial intelligence to provide personalized interior design recommendations. Users can upload room photos and receive AI-generated design suggestions including furniture placement, color schemes, and decor ideas.',
            ],
            [
                'title' => 'Rapid Fire Quiz Web App',
                'description' => 'A real-time quiz application with timer functionality, score tracking, leaderboard, and dynamic question management for competitive learning.',
                'image' => 'quiz-app.jpg',
                'tech' => ['JavaScript', 'HTML', 'CSS', 'MySQL', 'PHP'],
                'github' => '#',
                'demo' => '#',
                'long_description' => 'An engaging real-time quiz application featuring countdown timers, instant scoring, dynamic question banks, user authentication, leaderboard system, and performance analytics. Designed for competitive learning and knowledge assessment.',
            ],
            [
                'title' => 'Gymkhana Transparency System',
                'description' => 'A web-based system for managing and displaying club activities, budgets, and decisions transparently for student organizations.',
                'image' => 'gymkhana.jpg',
                'tech' => ['Laravel', 'Blade', 'MySQL', 'Tailwind CSS', 'JavaScript'],
                'github' => '#',
                'demo' => '#',
                'long_description' => 'A comprehensive transparency system designed for student gymkhana organizations. Features include budget tracking, activity logging, decision documentation, member management, and public dashboards for maintaining organizational transparency.',
            ],
        ];
    ?>

    <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="group" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <div class="glass-card rounded-2xl overflow-hidden hover:border-primary-500/30 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-primary-500/5 cursor-pointer"
                     onclick="openProjectModal(<?php echo e($loop->index); ?>)">
                    
                    <div class="relative h-52 overflow-hidden bg-dark-800/50">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary-500/10 to-purple-500/10 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-dark-950/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0">
                            <span class="text-xs text-primary-400 font-mono">View Details →</span>
                        </div>
                    </div>

                    
                    <div class="p-6">
                        <h3 class="text-xl font-display font-bold text-white mb-2 group-hover:text-primary-400 transition-colors">
                            <?php echo e($project['title']); ?>

                        </h3>
                        <p class="text-white/50 text-sm leading-relaxed mb-4">
                            <?php echo e($project['description']); ?>

                        </p>

                        
                        <div class="flex flex-wrap gap-2 mb-5">
                            <?php $__currentLoopData = $project['tech']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="px-2.5 py-1 text-xs font-mono text-primary-300/80 bg-primary-500/10 rounded-lg border border-primary-500/10">
                                    <?php echo e($tech); ?>

                                </span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        
                        <div class="flex items-center gap-3">
                            <a href="<?php echo e($project['github']); ?>"
                               class="inline-flex items-center gap-2 px-4 py-2 text-xs font-medium text-white/70 bg-white/5 border border-white/10 rounded-lg hover:bg-white/10 hover:text-white transition-all duration-300"
                               onclick="event.stopPropagation()">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                GitHub
                            </a>
                            <a href="<?php echo e($project['demo']); ?>"
                               class="inline-flex items-center gap-2 px-4 py-2 text-xs font-medium text-primary-300 bg-primary-500/10 border border-primary-500/20 rounded-lg hover:bg-primary-500/20 hover:text-primary-200 transition-all duration-300"
                               onclick="event.stopPropagation()">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\portfolio-ai\resources\views/sections/projects.blade.php ENDPATH**/ ?>