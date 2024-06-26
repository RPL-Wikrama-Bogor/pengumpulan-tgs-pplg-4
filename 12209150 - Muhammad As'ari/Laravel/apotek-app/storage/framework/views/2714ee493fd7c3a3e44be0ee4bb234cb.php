<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title>Apoteker App</title>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/styles.css')); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/home">Apotek App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Dashboard</a>
          </li>
          <?php if(Auth::check()): ?>
          <?php if(Auth::user()->role == "admin"): ?>
          <li class="nav-item dropdown">
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo e(route('order.data')); ?>">Pembelian</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('user.index')); ?>" aria-current="page" class="nav-link">Kelola Akun</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Obat
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo e(route('medicine.home')); ?>">Data Obat</a></li>
              <li><a class="dropdown-item" href="<?php echo e(route('medicine.create')); ?>">Tambah</a></li>
              <li><a class="dropdown-item" href="<?php echo e(route('medicine.stock')); ?>">Stok</a></li>
            </ul>
          </li>
          <?php endif; ?>
          <?php endif; ?>

          <?php if(Auth::check()): ?>
          <?php if(Auth::user()->role == "cashier"): ?>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('kasir.order.index')); ?>">Pembelian</a>
          </li>
          <?php endif; ?>
          <?php endif; ?>
          <?php if(Auth::check()): ?>
          <li class="nav-item">
            <a href="<?php echo e(route('logout')); ?>" class="nav-link">Logout</a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\Laravel\apotek-app\resources\views/layouts/template.blade.php ENDPATH**/ ?>