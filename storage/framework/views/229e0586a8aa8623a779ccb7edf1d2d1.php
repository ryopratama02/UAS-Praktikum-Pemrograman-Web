<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Vaksinasi Anak</title>
  <link href="<?php echo e(asset('build/assets/app.css')); ?>" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">


  <nav class="bg-white shadow mb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <div class="flex items-center space-x-4">
          <a href="<?php echo e(route('dashboard')); ?>" class="text-lg font-semibold text-blue-600">
            💉 Vaksinasi Anak
          </a>
          <a href="<?php echo e(route('dashboard')); ?>" class="text-gray-700 hover:text-blue-600">🏠 Dashboard</a>
          <a href="<?php echo e(route('anaks.index')); ?>" class="text-gray-700 hover:text-blue-600">📄 Data Vaksinasi Anak</a>
          <a href="<?php echo e(route('anaks.create')); ?>" class="text-gray-700 hover:text-blue-600">➕ Tambah Data Anak</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php echo $__env->yieldContent('content'); ?>
  </div>


  <footer class="text-center py-4 mt-10 text-sm text-gray-500">
    &copy; <?php echo e(date('Y')); ?> Aplikasi Vaksinasi Anak.
  </footer>

</body>
</html>
<?php /**PATH D:\XAMPP\htdocs\vaksinasi-anak\resources\views/layouts/app.blade.php ENDPATH**/ ?>