

<?php $__env->startSection('title', 'Daftar Buku'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center">
        <h1>Daftar Buku</h1>
        <a href="<?php echo e(route('buku.create')); ?>" class="btn btn-success">Tambah Buku</a>
    </div>
    

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($index + 1); ?></td>
                    <td><?php echo e($item->judul); ?></td>
                    <td><?php echo e($item->penulis); ?></td>
                    <td><?php echo e($item->penerbit); ?></td>
                    <td><?php echo e($item->tahun_terbit); ?></td>
                    <td><?php echo e($item->stok); ?></td>
                    <td>
                        <a href="<?php echo e(route('buku.edit', $item->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('buku.destroy', $item->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BookKeepingLaravel\resources\views/buku/index.blade.php ENDPATH**/ ?>