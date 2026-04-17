<div class="max-w-7xl mx-auto px-4 md:px-8 pt-8 pb-24">
    <div class="mb-6 flex flex-col gap-3 md:flex-row md:justify-between md:items-end">
        <div>
            <h2 class="text-slate-800 font-bold text-2xl md:text-3xl">Revisión Manual</h2>
            <p class="text-gray-600 text-sm md:text-base">Confirma las coincidencias detectadas por similitud.</p>
        </div>
        <div class="text-gray-700 text-sm">
            Pendientes: <span class="font-mono bg-gray-100 border border-gray-200 px-2 py-1 rounded-md"><?php echo e($products->total()); ?></span>
        </div>
    </div>

    <div class="flex flex-col gap-6">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <?php 
                $suggestion = $suggestions[$localProduct->id] ?? null; 
            ?>

            <div <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'product-'.e($localProduct->id).''; ?>wire:key="product-<?php echo e($localProduct->id); ?>" class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm transition-colors">
                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($suggestion): ?>
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-sans text-xl font-semibold text-slate-900">
                            Posible Coincidencia
                        </h3>
                        <span class="text-xs font-semibold tracking-wide uppercase bg-green-100 text-green-700 py-1 px-3 rounded-full">
                            <?php echo e($suggestion['confidence']); ?>% Similitud
                        </span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="p-4 rounded-lg bg-gray-50 border border-gray-200">
                            <span class="text-xs font-semibold tracking-wide uppercase text-gray-500 block mb-2">Tu Producto</span>
                            <p class="font-mono text-xs font-semibold tracking-wide uppercase text-slate-900 mb-1">
                                <?php echo e($localProduct->code); ?>

                            </p>
                            <p class="font-sans text-sm text-gray-700 truncate" title="<?php echo e($localProduct->description); ?>">
                                <?php echo e($localProduct->description ?: 'Sin descripción'); ?>

                            </p>
                        </div>

                        <div class="p-4 rounded-lg bg-white border border-green-200 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-green-600"></div>
                            <span class="text-xs font-semibold tracking-wide uppercase text-gray-500 block mb-2">Sugerencia Proveedor</span>
                            <p class="font-mono text-xs font-semibold tracking-wide uppercase text-slate-900 mb-1">
                                <?php echo e($suggestion['code']); ?>

                            </p>
                            <p class="font-sans text-sm text-gray-700 truncate">
                                <?php echo e($suggestion['description'] ?: 'Sin descripción'); ?>

                            </p>
                            <div class="mt-3 flex justify-end">
                                <span class="text-xs font-semibold bg-green-100 text-green-700 py-0.5 px-2 rounded-md">
                                    Stock: <?php echo e($suggestion['quantity']); ?>

                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
                        <button wire:click="discard(<?php echo e($localProduct->id); ?>)" class="bg-white cursor-pointer text-slate-800 border border-gray-300 rounded-md px-4 h-10 text-sm font-medium hover:bg-gray-100 transition-colors">
                            Descartar
                        </button>
                        <button wire:click="approveMatch(<?php echo e($localProduct->id); ?>, '<?php echo e($localProduct->code); ?>', '<?php echo e($suggestion['code']); ?>', <?php echo e($suggestion['quantity']); ?>)" class="bg-green-700 cursor-pointer text-white rounded-md px-6 h-10 text-sm font-medium hover:bg-green-800 transition-colors shadow-sm">
                            Aprobar y Vincular
                        </button>
                    </div>
                <?php else: ?>
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-mono text-xs font-semibold tracking-wide uppercase text-slate-900 mb-1">
                                <?php echo e($localProduct->code); ?>

                            </p>
                            <p class="font-sans text-sm text-gray-700"><?php echo e($localProduct->description); ?></p>
                            <span class="inline-block mt-2 text-xs font-semibold bg-red-100 text-red-700 py-0.5 px-2 rounded-md uppercase tracking-wide">
                                Sin coincidencias en el proveedor
                            </span>
                        </div>
                        <button wire:click="discard(<?php echo e($localProduct->id); ?>)" class="bg-white text-slate-800 border border-gray-300 rounded-md px-4 h-10 text-sm font-medium hover:bg-gray-100 transition-colors">
                            Marcar como Agotado
                        </button>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <div class="text-center py-16 bg-white border border-gray-200 rounded-lg">
                <p class="text-slate-900 text-lg font-medium">¡Todo listo!</p>
                <p class="text-gray-600 text-sm mt-2">No hay productos pendientes por conciliar.</p>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="mt-6">
            <?php echo e($products->links()); ?>

        </div>
    </div>
</div><?php /**PATH C:\Users\Administrador.A2SOFTWAY\Downloads\samsung-galaxy-s24-ultra-mockup\Alternativo\ComparativeList\List\resources\views/livewire/reconciliation-board.blade.php ENDPATH**/ ?>