

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('medicine.store')); ?>" method="POST" class="card p-5">
        <?php echo csrf_field(); ?>

        <?php if(Session::get('success')): ?>
            <div class="alert alert-success"> <?php echo e(Session::get('success')); ?> </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <ul class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>

    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama Obat :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?> ">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="type" class="col-sm-2 col-form-label">Jenis Obat :</label>
        <div class="col-sm-10">
            <select class="form-select" id="type" name="type">
                <option selected disabled hidden>Pilih</option>
                <option value="tablet" <?php echo e(old('type') == 'tablet' ? 'selected' : ''); ?>>Tablet</option>
                <option value="sirup" <?php echo e(old('type') == 'sirup' ? 'selected' : ''); ?>>Sirup</option>
                <option value="kapsul" <?php echo e(old('type') == 'kapsul' ? 'selected' : ''); ?>>Kapsul</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Harga :</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="price" name="price" value="<?php echo e(old('price')); ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="stock" class="col-sm-2 col-form-label">Stok :</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="stock" name="stock" value="<?php echo e(old('stock')); ?>">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\apotek-app\resources\views/medicine/create.blade.php ENDPATH**/ ?>