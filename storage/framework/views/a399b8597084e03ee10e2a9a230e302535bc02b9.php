<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Create Product')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <?php if(session('error')): ?>
            <div class="alert alert-error">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        <div class="simple-form max-w-7xl mx-auto sm:px-6 lg:px-8">
            <?php if($errors->any()): ?>
                <ul class="list-none bg-red-500 rounded-lg my-10">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="text-white py-2 px-4 font-semibold"><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
            <form action="<?php echo e(route("products.store")); ?>" enctype="multipart/form-data" method="post">
                <?php echo csrf_field(); ?>
                <p>
                    <label for="">Kode Produk</label>
                    <input type="text" name="product_code" id="" />
                </p>
                <p>
                    <label for="">Nama Produk</label>
                    <input type="text" name="product_name" id="" />
                </p>
                <p>
                    <label for="">Deskripsi</label>
                    <textarea name="product_description" id="" cols="30" rows="10"></textarea>
                </p>
                <p>
                    <label for="">Harga</label>
                    <input type="number" name="product_price" id="" />
                </p>
                <p>
                    <label for="">Gambar Produk</label>
                    <input type="file" name="product_image" id="" />
                </p>
                <button type="submit" class="btn bg-blue-400 text-white px-5 py-2">Save</button>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\Azhar\Kuliah\Semester 5\Pengembangan Aplikasi Berbasis WEB\laravel-web\resources\views/product.blade.php ENDPATH**/ ?>