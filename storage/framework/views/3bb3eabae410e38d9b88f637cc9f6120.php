<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'subtitle' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title', 'subtitle' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="text-center mb-16 md:mb-20" data-aos="fade-up" data-aos-duration="800">
    <?php if($subtitle): ?>
        <span class="inline-block px-4 py-1.5 text-xs font-mono tracking-widest uppercase text-primary-400 bg-primary-500/10 border border-primary-500/20 rounded-full mb-4">
            <?php echo e($subtitle); ?>

        </span>
    <?php endif; ?>
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white mb-4">
        <?php echo e($title); ?>

    </h2>
    <div class="w-20 h-1 bg-gradient-to-r from-primary-500 to-purple-500 mx-auto rounded-full"></div>
</div>
<?php /**PATH E:\portfolio-ai\resources\views/components/section-title.blade.php ENDPATH**/ ?>