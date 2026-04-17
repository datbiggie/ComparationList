<div class="relative w-full min-h-screen font-sans">
    <div class="absolute top-0 left-0 right-0 h-125 bg-linear-to-b from-green-100/40 to-transparent pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 md:px-8 pt-12 pb-12">
        <div class="text-center mb-16">
            <h1 class="text-slate-800 font-bold text-3xl md:text-4xl mb-3">
                Conciliación Inteligente
            </h1>
            <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto">
                Sube tu inventario local y el del proveedor.
            </p>
        </div>

        <form wire:submit="processFiles" class="max-w-4xl mx-auto bg-white border border-gray-200 rounded-lg p-6 md:p-8 shadow-sm">
            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['upload'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg text-sm">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <div class="flex flex-col gap-3">
                    <label class="text-xs font-semibold tracking-wide uppercase text-gray-700">
                        Inventario Local (.xlsx)
                    </label>
                    <div class="border border-gray-300 rounded-lg bg-gray-50 p-6 text-center hover:border-green-700 transition-colors border-dashed relative">
                        <input type="file" wire:model="localFile" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".xlsx,.xls">
                        <span class="text-gray-600 text-sm">
                            <?php echo e($localFile ? $localFile->getClientOriginalName() : 'Arrastra o haz clic'); ?>

                        </span>
                    </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['localFile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-700 text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

                <div class="flex flex-col gap-3">
                    <label class="text-xs font-semibold tracking-wide uppercase text-gray-700">
                        Catálogo Proveedor (.xlsx)
                    </label>
                    <div class="border border-gray-300 rounded-lg bg-gray-50 p-6 text-center hover:border-green-700 transition-colors border-dashed relative">
                        <input type="file" wire:model="supplierFile" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".xlsx,.xls">
                        <span class="text-gray-600 text-sm">
                            <?php echo e($supplierFile ? $supplierFile->getClientOriginalName() : 'Arrastra o haz clic'); ?>

                        </span>
                    </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['supplierFile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-700 text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            <hr class="border-gray-200 my-8">

            <div class="flex justify-end">
                <button type="submit" wire:loading.attr="disabled" class="bg-green-700 text-white rounded-md px-6 h-10 text-sm font-medium disabled:opacity-50 hover:bg-green-800 transition-colors flex items-center gap-2 shadow-sm">
                    <span wire:loading.remove wire:target="processFiles">Iniciar comparación</span>
                    <span wire:loading wire:target="processFiles">Procesando...</span>
                </button>
            </div>
        </form>
    </div>
</div><?php /**PATH C:\Users\Administrador.A2SOFTWAY\Downloads\samsung-galaxy-s24-ultra-mockup\Alternativo\ComparativeList\List\resources\views/livewire/inventory-upload.blade.php ENDPATH**/ ?>