

<?php $__env->startSection('content'); ?>

<?php if(Session::get('warning')): ?>
    <div class="alert alert-warning"><?php echo e(Session::get('warning')); ?></div>
<?php endif; ?>
<div class="jumbotron py-4 px-5">
    <h1 class="display-4">
        Selamat Datang <?php echo e(Auth::user()->name); ?>!
    </h1>
    <hr class="my-4">
    <p>Aplikasi ini digunakan hanya oleh pegawai administrator APOTEK. Digunakan untuk mengelola data obat, penyetokan, juga (kasir).</p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\apotek-app\resources\views/home.blade.php ENDPATH**/ ?>