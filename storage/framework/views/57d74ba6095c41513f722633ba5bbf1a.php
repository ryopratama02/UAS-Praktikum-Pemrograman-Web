

<?php $__env->startSection('content'); ?>
<div class="mb-6">
  <h1 class="text-3xl font-bold mb-4">📋 Data Vaksinasi Anak</h1>

  <?php if(session('success')): ?>
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
      <?php echo e(session('success')); ?>

    </div>
  <?php endif; ?>

  <!-- Form Pencarian -->
  <form method="GET" class="mb-4 flex items-center gap-2">
    <input type="text" name="keyword" value="<?php echo e($keyword); ?>" placeholder="Cari nama / orang tua..." class="border border-gray-300 rounded px-3 py-2 w-1/3">
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Cari</button>
  </form>

  <!-- Tabel -->
  <div class="overflow-x-auto bg-white shadow rounded">
    <table class="w-full table-auto border-collapse">
      <thead class="bg-blue-100 text-left">
        <tr>
          <th class="px-4 py-2 border">#</th>
          <th class="px-4 py-2 border">Nama</th>
          <th class="px-4 py-2 border">Tanggal Lahir</th>
          <th class="px-4 py-2 border">JK</th>
          <th class="px-4 py-2 border">Orang Tua</th>
          <th class="px-4 py-2 border">Alamat</th>
          <th class="px-4 py-2 border">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $anaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr class="hover:bg-gray-50">
          <td class="px-4 py-2 border"><?php echo e($loop->iteration); ?></td>
          <td class="px-4 py-2 border"><?php echo e($anak->nama); ?></td>
          <td class="px-4 py-2 border"><?php echo e($anak->tanggal_lahir); ?></td>
          <td class="px-4 py-2 border"><?php echo e($anak->jenis_kelamin); ?></td>
          <td class="px-4 py-2 border"><?php echo e($anak->nama_orang_tua); ?></td>
          <td class="px-4 py-2 border"><?php echo e($anak->alamat); ?></td>
          <td class="px-4 py-2 border space-x-2">
            <a href="<?php echo e(route('anaks.edit', $anak->id)); ?>" class="text-blue-600">Edit</a>
            <form action="<?php echo e(route('anaks.destroy', $anak->id)); ?>" method="POST" class="inline">
              <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
              <button onclick="return confirm('Yakin ingin hapus?')" class="text-red-600">Hapus</button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="7" class="text-center px-4 py-4 text-gray-500">Tidak ada data ditemukan.</td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <div class="mt-4">
    <?php echo e($anaks->withQueryString()->links()); ?>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP\htdocs\data-vaksinasi-anak\resources\views/anaks/index.blade.php ENDPATH**/ ?>