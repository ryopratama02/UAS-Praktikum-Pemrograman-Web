

<?php $__env->startSection('content'); ?>
<div class="p-6 bg-white rounded shadow">
  <h1 class="text-3xl font-bold mb-6">📊 Dashboard Vaksinasi Anak</h1>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <div class="bg-blue-100 text-blue-800 p-4 rounded shadow">
      <p class="text-lg">Total Anak</p>
      <h2 class="text-3xl font-bold"><?php echo e($totalAnak); ?></h2>
    </div>
    <div class="bg-green-100 text-green-800 p-4 rounded shadow">
      <p class="text-lg">Laki-laki</p>
      <h2 class="text-3xl font-bold"><?php echo e($laki); ?></h2>
    </div>
    <div class="bg-pink-100 text-pink-800 p-4 rounded shadow">
      <p class="text-lg">Perempuan</p>
      <h2 class="text-3xl font-bold"><?php echo e($perempuan); ?></h2>
    </div>
  </div>

  <div class="flex gap-4">
    <a href="<?php echo e(route('anaks.create')); ?>" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
      ➕ Tambah Data Anak
    </a>
    <a href="<?php echo e(route('anaks.index')); ?>" class="bg-gray-800 text-white px-6 py-3 rounded hover:bg-gray-900 transition">
      📄 Lihat Data Anak
    </a>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP\htdocs\data-vaksinasi-anak\resources\views/dashboard.blade.php ENDPATH**/ ?>