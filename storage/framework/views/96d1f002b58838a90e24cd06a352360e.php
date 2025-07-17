

<?php $__env->startSection('content'); ?>
<h1 class="text-2xl font-semibold mb-4">Tambah Data Anak</h1>

<?php if($errors->any()): ?>
  <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
    <ul class="list-disc ml-5">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?>

<form action="<?php echo e(route('anaks.store')); ?>" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
  <?php echo csrf_field(); ?>

  <div>
    <label>Nama</label>
    <input type="text" name="nama" value="<?php echo e(old('nama')); ?>" class="w-full border px-4 py-2 rounded">
  </div>

  <div>
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" value="<?php echo e(old('tanggal_lahir')); ?>" class="w-full border px-4 py-2 rounded">
  </div>

  <div>
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="w-full border px-4 py-2 rounded">
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>

  <div>
    <label>Nama Orang Tua</label>
    <input type="text" name="nama_orang_tua" value="<?php echo e(old('nama_orang_tua')); ?>" class="w-full border px-4 py-2 rounded">
  </div>

  <div>
    <label>Alamat</label>
    <textarea name="alamat" class="w-full border px-4 py-2 rounded"><?php echo e(old('alamat')); ?></textarea>
  </div>

  <div class="flex gap-4">
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    <a href="<?php echo e(route('anaks.index')); ?>" class="text-gray-600">Batal</a>
  </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP\htdocs\vaksinasi-anak\resources\views/anaks/create.blade.php ENDPATH**/ ?>