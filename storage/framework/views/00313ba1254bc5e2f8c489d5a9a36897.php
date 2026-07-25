<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dikshita - Second-Year B.Tech Computer Science (Cyber Security) Student | Java Developer | Web Developer | AI Enthusiast">
    <meta name="keywords" content="Dikshita, portfolio, cyber security, java developer, web developer, AI, Laravel, Python">
    <meta name="author" content="Dikshita">
    <meta name="theme-color" content="#020617">

    <meta property="og:title" content="Dikshita | Portfolio">
    <meta property="og:description" content="Second-Year B.Tech Computer Science (Cyber Security) Student & Software Developer">
    <meta property="og:type" content="website">

    <title>Dikshita | Portfolio</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900|space-grotesk:300,400,500,600,700|jetbrains-mono:400,500|100,200,300,400" rel="stylesheet" />

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-dark-950 text-white font-sans antialiased overflow-x-hidden">

    
    <div id="loading-screen" class="fixed inset-0 z-[9999] bg-dark-950 flex items-center justify-center transition-opacity duration-500">
        <div class="text-center">
            <div class="relative w-20 h-20 mx-auto mb-6">
                <div class="absolute inset-0 rounded-full border-2 border-primary-500/20"></div>
                <div class="absolute inset-0 rounded-full border-2 border-transparent border-t-primary-500 animate-spin"></div>
                <div class="absolute inset-2 rounded-full border-2 border-transparent border-t-purple-400 animate-spin" style="animation-direction: reverse; animation-duration: 1.5s;"></div>
                <div class="absolute inset-4 rounded-full border-2 border-transparent border-t-violet-300 animate-spin" style="animation-duration: 2s;"></div>
            </div>
            <p class="text-primary-400 font-mono text-sm tracking-widest uppercase animate-pulse">Loading</p>
        </div>
    </div>

    
    <div id="cursor-glow" class="fixed w-[500px] h-[500px] rounded-full pointer-events-none z-[1] opacity-0 transition-opacity duration-300"
         style="background: radial-gradient(circle, rgba(139,92,246,0.08) 0%, transparent 70%); transform: translate(-50%, -50%);">
    </div>

    
    <div id="scroll-progress" class="fixed top-0 left-0 h-[3px] bg-gradient-to-r from-primary-500 via-purple-500 to-violet-400 z-[100] transition-all duration-150" style="width: 0%"></div>

    
    <button id="back-to-top"
            class="fixed bottom-8 right-8 z-50 w-12 h-12 rounded-full bg-primary-500/10 backdrop-blur-xl border border-primary-500/20 text-primary-400 flex items-center justify-center opacity-0 translate-y-4 transition-all duration-300 hover:bg-primary-500/20 hover:scale-110 hover:border-primary-500/40 cursor-pointer"
            aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
        </svg>
    </button>

    
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-primary-500/5 rounded-full blur-3xl animate-blob"></div>
        <div class="absolute top-1/3 -left-40 w-96 h-96 bg-purple-500/5 rounded-full blur-3xl animate-blob" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-violet-500/5 rounded-full blur-3xl animate-blob" style="animation-delay: 4s;"></div>
    </div>

    
    <div class="relative z-10">
        <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <main>
            <?php echo $__env->make('sections.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('sections.about', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('sections.skills', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('sections.projects', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('sections.experience', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('sections.certificates', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('sections.achievements', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('sections.contact', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </main>

        <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    
    <?php echo $__env->make('components.project-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH E:\portfolio-ai\resources\views/layouts/app.blade.php ENDPATH**/ ?>