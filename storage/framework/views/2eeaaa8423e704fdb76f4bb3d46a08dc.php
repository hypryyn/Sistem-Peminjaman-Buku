

<?php $__env->startSection('title', 'Daftar Siswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center">
        <h1>Daftar Siswa</h1>
        <a href="<?php echo e(route('siswa.create')); ?>" class="btn btn-success">Tambah Siswa</a>
    </div>
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Jenis Kelamin</th>
                <th>Hobi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($index + 1); ?></td>
                    <td><?php echo e($item->nis); ?></td>
                    <td><?php echo e($item->nama); ?></td>
                    <td><?php echo e($item->alamat); ?></td>
                    <td><?php echo e($item->nohp); ?></td>
                    <td><?php echo e($item->jeniskelamin); ?></td>
                    <td><?php echo e($item->hobi); ?></td>
                    <td>
                        <a href="<?php echo e(route('siswa.edit', $item->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('siswa.destroy', $item->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BookKeepingLaravel\resources\views/siswa/index.blade.php ENDPATH**/ ?>