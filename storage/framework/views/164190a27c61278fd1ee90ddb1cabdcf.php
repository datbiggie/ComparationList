<div class="max-w-7xl mx-auto px-4 md:px-8 pt-8 pb-24 font-sans selection:bg-green-100 selection:text-slate-900">
    
    <div class="mb-6 flex flex-col gap-4 md:flex-row md:justify-between md:items-end">
        <div>
            <h2 class="text-slate-800 font-bold text-2xl md:text-3xl mb-1">Inventario Actualizado</h2>
            <p class="text-gray-600 text-sm md:text-base">Lista maestra de productos con el stock conciliado del proveedor.</p>
        </div>
        
        <div class="flex flex-wrap gap-3 items-center">
            <div class="relative">
                <input 
                    wire:model.live.debounce.300ms="search" 
                    type="text" 
                    placeholder="Buscar código o descripción..." 
                    class="bg-white text-slate-800 border border-gray-300 rounded-md px-4 h-10 text-sm w-70 focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700 transition-all placeholder:text-gray-400"
                >
            </div>

            <div class="relative">
                <input
                    wire:model.live.debounce.300ms="minimumStock"
                    type="number"
                    min="0"
                    step="1"
                    placeholder="Stock mínimo"
                    class="bg-white text-slate-800 border border-gray-300 rounded-md px-4 h-10 text-sm w-35 focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700 transition-all placeholder:text-gray-400"
                >
            </div>

            <button 
                wire:click="exportToExcel"
                class="bg-green-700 text-white border whitespace-nowrap border-green-700 rounded-md px-5 h-10 text-sm font-medium hover:bg-green-800 transition-colors flex items-center gap-2 shadow-sm"
            >
                Exportar a Excel
            </button>
        </div>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($minimumStock !== null && $minimumStock !== ''): ?>
        <div class="mb-4">
            <span class="text-xs font-semibold uppercase bg-amber-100 text-amber-700 py-1 px-2.5 rounded-full tracking-wide">
                Mostrando productos con stock menor o igual a <?php echo e((int) $minimumStock); ?>

            </span>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 md:p-6">
        <div class="overflow-x-auto rounded-md border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="px-4 py-3 font-semibold text-gray-700 uppercase tracking-wide text-xs">Código Local</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 uppercase tracking-wide text-xs">Descripción del Producto</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 uppercase tracking-wide text-xs text-center">Marca</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 uppercase tracking-wide text-xs text-right">Stock</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 uppercase tracking-wide text-xs text-center">Estado</th>
                    </tr>
                </thead>
                
                <tbody class="divide-y divide-gray-100 bg-white text-sm text-gray-700">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <tr <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'row-'.e($product->id).''; ?>wire:key="row-<?php echo e($product->id); ?>" class="bg-white even:bg-gray-50 hover:bg-gray-100 transition-colors">
                            <td class="px-4 py-3 font-semibold text-gray-900 uppercase whitespace-nowrap">
                                <?php echo e($product->code); ?>

                            </td>
                            
                            <td class="px-4 py-3 max-w-75 truncate" title="<?php echo e($product->description); ?>">
                                <?php echo e($product->description ?: '-'); ?>

                            </td>
                            
                            <td class="px-4 py-3 text-center text-gray-600">
                                <?php echo e($product->brand ?: '-'); ?>

                            </td>
                            
                            <td class="px-4 py-3 text-right font-semibold text-gray-900">
                                <?php echo e($product->resolved_stock); ?>

                            </td>
                            
                            <td class="px-4 py-3 text-center">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->resolved_stock == 0): ?>
                                    <span class="text-xs font-semibold uppercase bg-red-100 text-red-700 py-1 px-2.5 rounded-full tracking-wide">
                                        Agotado
                                    </span>
                                <?php elseif($product->resolved_stock <= 5): ?>
                                    <span class="text-xs font-semibold uppercase bg-amber-100 text-amber-700 py-1 px-2.5 rounded-full tracking-wide">
                                        Bajo Stock
                                    </span>
                                <?php else: ?>
                                    <span class="text-xs font-semibold uppercase bg-green-100 text-green-700 py-1 px-2.5 rounded-full tracking-wide">
                                        Óptimo
                                    </span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </td>
                        </tr>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        <tr>
                            <td colspan="5" class="px-4 py-12 text-center text-gray-500">
                                No se encontraron productos. Asegúrate de completar la conciliación.
                            </td>
                        </tr>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </tbody>
            </table>
        </div>
        
        <div class="px-2 md:px-0 pt-4">
            <?php echo e($products->links()); ?>

        </div>
    </div>
</div><?php /**PATH C:\Users\Administrador.A2SOFTWAY\Downloads\samsung-galaxy-s24-ultra-mockup\Alternativo\ComparativeList\List\resources\views/livewire/final-inventory-table.blade.php ENDPATH**/ ?>