<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo e($title ?? 'Johbri C.A.'); ?></title>
        
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="bg-slate-50 font-sans antialiased text-slate-800">
        <header class="sticky top-0 z-50 w-full bg-white border-b border-gray-200 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between">
                <a href="<?php echo e(route('dashboard')); ?>" class="flex items-center gap-2 transition-opacity hover:opacity-90">
                    <span class="font-semibold uppercase text-lg tracking-tight text-slate-800">Johbri C.A.</span>
                </a>

                <nav class="flex items-center gap-1 md:gap-2">
                    <a href="<?php echo e(route('dashboard')); ?>" class="px-3 py-2 rounded-md text-sm font-medium transition-colors <?php echo e(request()->routeIs('dashboard') ? 'text-slate-900 bg-gray-100' : 'text-gray-600 hover:text-slate-900 hover:bg-gray-100'); ?>">
                    Resumen
                </a>    
                    <a href="<?php echo e(route('reconciliation.board')); ?>" class="px-3 py-2 rounded-md text-sm font-medium transition-colors <?php echo e(request()->routeIs('reconciliation.board') ? 'text-slate-900 bg-gray-100' : 'text-gray-600 hover:text-slate-900 hover:bg-gray-100'); ?>">
                    Revisión
                </a>
                    <a href="<?php echo e(route('inventory.final')); ?>" class="px-3 py-2 rounded-md text-sm font-medium transition-colors <?php echo e(request()->routeIs('inventory.final') ? 'text-slate-900 bg-gray-100' : 'text-gray-600 hover:text-slate-900 hover:bg-gray-100'); ?>">
                    Inventario
                </a>
                    <a href="<?php echo e(route('upload')); ?>" class="px-4 py-2 rounded-md text-sm font-medium transition-colors bg-green-700 text-white hover:bg-green-800 shadow-sm">
                    Carga
                </a>
                </nav>
            </div>
        </header>

        <?php echo e($slot); ?>

    </body>
</html><?php /**PATH C:\Users\Administrador.A2SOFTWAY\Downloads\samsung-galaxy-s24-ultra-mockup\Alternativo\ComparativeList\List\resources\views/layouts/app.blade.php ENDPATH**/ ?>