

<?php $__env->startSection('title', 'Daftar Transaksi'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Daftar Transaksi</h1>
    <div class="mb-3">
        <a href="<?php echo e(route('transaksi.create')); ?>" class="btn btn-primary">Tambah Transaksi</a>
    </div>

    <?php if($transaksis->isEmpty()): ?>
        <div class="alert alert-info">Belum ada transaksi yang tercatat.</div>
    <?php else: ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($transaksi->id); ?></td>
                        <td><?php echo e($transaksi->siswa->nama); ?></td>
                        <td><?php echo e($transaksi->buku->judul); ?></td>
                        <td><?php echo e($transaksi->tanggal_pinjam); ?></td>
                        <td><?php echo e($transaksi->tanggal_kembali ?? '-'); ?></td>
                        <td><?php echo e(ucfirst($transaksi->status)); ?></td>
                        <td>
                            <a href="<?php echo e(route('transaksi.show', $transaksi->id)); ?>" class="btn btn-sm btn-info">Lihat</a>
                            <a href="<?php echo e(route('transaksi.edit', $transaksi->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form action="<?php echo e(route('transaksi.destroy', $transaksi->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus transaksi ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BookKeepingLaravel\resources\views/transaksi/index.blade.php ENDPATH**/ ?>