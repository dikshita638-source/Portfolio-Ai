<?php $__env->startComponent('components.section', ['id' => 'skills']); ?>
    <?php if (isset($component)) { $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-title','data' => ['title' => 'My Skills','subtitle' => 'Technologies & Tools']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'My Skills','subtitle' => 'Technologies & Tools']); ?>
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
        $skillCategories = [
            'Programming' => [
                ['name' => 'Java', 'icon' => '☕', 'level' => 85, 'color' => 'from-orange-500 to-red-500'],
                ['name' => 'Python', 'icon' => '🐍', 'level' => 75, 'color' => 'from-blue-500 to-yellow-500'],
                ['name' => 'C', 'icon' => '⚙️', 'level' => 70, 'color' => 'from-gray-400 to-blue-500'],
            ],
            'Web Development' => [
                ['name' => 'HTML', 'icon' => '🌐', 'level' => 90, 'color' => 'from-orange-500 to-red-500'],
                ['name' => 'CSS', 'icon' => '🎨', 'level' => 85, 'color' => 'from-blue-500 to-purple-500'],
                ['name' => 'JavaScript', 'icon' => '⚡', 'level' => 80, 'color' => 'from-yellow-400 to-yellow-600'],
                ['name' => 'Laravel', 'icon' => '🔺', 'level' => 75, 'color' => 'from-red-500 to-red-700'],
                ['name' => 'Blade', 'icon' => '🗡️', 'level' => 75, 'color' => 'from-red-400 to-pink-500'],
                ['name' => 'Tailwind CSS', 'icon' => '💨', 'level' => 80, 'color' => 'from-cyan-400 to-blue-500'],
            ],
            'Database' => [
                ['name' => 'MySQL', 'icon' => '🗄️', 'level' => 75, 'color' => 'from-blue-500 to-blue-700'],
            ],
            'Tools' => [
                ['name' => 'Git', 'icon' => '📂', 'level' => 80, 'color' => 'from-orange-600 to-red-600'],
                ['name' => 'GitHub', 'icon' => '🐙', 'level' => 80, 'color' => 'from-gray-500 to-gray-700'],
                ['name' => 'VS Code', 'icon' => '💻', 'level' => 85, 'color' => 'from-blue-500 to-blue-600'],
                ['name' => 'Postman', 'icon' => '📮', 'level' => 75, 'color' => 'from-orange-500 to-pink-500'],
            ],
            'Currently Learning' => [
                ['name' => 'DSA', 'icon' => '🧮', 'level' => 55, 'color' => 'from-green-500 to-teal-500'],
                ['name' => 'Cyber Security', 'icon' => '🛡️', 'level' => 50, 'color' => 'from-green-400 to-emerald-600'],
                ['name' => 'AI', 'icon' => '🤖', 'level' => 45, 'color' => 'from-purple-500 to-pink-500'],
                ['name' => 'Laravel', 'icon' => '🔺', 'level' => 65, 'color' => 'from-red-500 to-red-700'],
            ],
        ];
    ?>

    <div class="space-y-12">
        <?php $__currentLoopData = $skillCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <h3 class="text-xl font-display font-semibold text-white mb-6 flex items-center gap-3">
                    <span class="w-2 h-2 bg-primary-500 rounded-full"></span>
                    <?php echo e($category); ?>

                </h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group relative" data-aos="zoom-in" data-aos-delay="<?php echo e(($loop->parent->index * 100) + ($loop->index * 50)); ?>">
                            <div class="skill-card glass-card p-5 rounded-2xl text-center hover:border-primary-500/30 transition-all duration-500 hover:-translate-y-1 cursor-default">
                                <div class="text-3xl mb-3 transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-6">
                                    <?php echo e($skill['icon']); ?>

                                </div>
                                <h4 class="text-white text-sm font-semibold mb-3"><?php echo e($skill['name']); ?></h4>
                                <div class="w-full h-1.5 bg-white/5 rounded-full overflow-hidden">
                                    <div class="h-full rounded-full bg-gradient-to-r <?php echo e($skill['color']); ?> skill-progress transition-all duration-1000 ease-out"
                                         style="width: 0%"
                                         data-width="<?php echo e($skill['level']); ?>%">
                                    </div>
                                </div>
                                <span class="text-xs text-white/30 mt-2 block"><?php echo e($skill['level']); ?>%</span>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\portfolio-ai\resources\views/sections/skills.blade.php ENDPATH**/ ?>