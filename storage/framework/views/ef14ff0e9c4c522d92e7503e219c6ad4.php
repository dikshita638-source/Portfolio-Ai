<?php $__env->startComponent('components.section', ['id' => 'certificates']); ?>
    <?php if (isset($component)) { $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-title','data' => ['title' => 'Certificates','subtitle' => 'Verified Credentials']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Certificates','subtitle' => 'Verified Credentials']); ?>
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
        $certificates = [
            [
                'title' => 'Web Development Bootcamp',
                'issuer' => 'Udemy',
                'date' => '2025',
                'description' => 'Complete web development course covering HTML, CSS, JavaScript, and modern frameworks.',
            ],
            [
                'title' => 'Python for Data Science',
                'issuer' => 'Coursera',
                'date' => '2025',
                'description' => 'Comprehensive Python programming course with data science applications.',
            ],
            [
                'title' => 'Cyber Security Fundamentals',
                'issuer' => 'Cisco Networking Academy',
                'date' => '2024',
                'description' => 'Introduction to cybersecurity concepts, threats, and defense mechanisms.',
            ],
            [
                'title' => 'Java Programming Masterclass',
                'issuer' => 'Udemy',
                'date' => '2024',
                'description' => 'Advanced Java programming concepts including OOP, collections, and multithreading.',
            ],
        ];
    ?>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php $__currentLoopData = $certificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="group" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <div class="glass-card p-6 rounded-2xl h-full hover:border-primary-500/30 transition-all duration-500 hover:-translate-y-1">
                    
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary-500/20 to-purple-500/20 border border-white/10 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>

                    <h3 class="text-base font-display font-bold text-white mb-2 group-hover:text-primary-400 transition-colors">
                        <?php echo e($cert['title']); ?>

                    </h3>
                    <p class="text-primary-400/80 text-sm font-medium mb-1"><?php echo e($cert['issuer']); ?></p>
                    <p class="text-white/30 text-xs font-mono mb-3"><?php echo e($cert['date']); ?></p>
                    <p class="text-white/40 text-sm leading-relaxed mb-5"><?php echo e($cert['description']); ?></p>

                    <a href="#" class="inline-flex items-center gap-2 text-xs font-medium text-primary-400 hover:text-primary-300 transition-colors group/link">
                        View Certificate
                        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\portfolio-ai\resources\views/sections/certificates.blade.php ENDPATH**/ ?>