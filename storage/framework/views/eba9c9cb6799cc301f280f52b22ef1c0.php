

<?php $__env->startSection('title', 'Tambah Siswa'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Tambah Siswa</h1>
    <form action="<?php echo e(route('siswa.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" name="nis" id="nis" class="form-control" value="<?php echo e(old('nis')); ?>" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo e(old('nama')); ?>" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" required><?php echo e(old('alamat')); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="nohp" class="form-label">No HP</label>
            <input type="text" name="nohp" id="nohp" class="form-control" value="<?php echo e(old('nohp')); ?>" required>
        </div>

        <div class="mb-3">
            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
            <select name="jeniskelamin" id="jeniskelamin" class="form-control" required>
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="Laki-laki" <?php echo e(old('jeniskelamin') == 'Laki-laki' ? 'selected' : ''); ?>>Laki-laki</option>
                <option value="Perempuan" <?php echo e(old('jeniskelamin') == 'Perempuan' ? 'selected' : ''); ?>>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi</label>
            <input type="text" name="hobi" id="hobi" class="form-control" value="<?php echo e(old('hobi')); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BookKeepingLaravel\resources\views/siswa/create.blade.php ENDPATH**/ ?>