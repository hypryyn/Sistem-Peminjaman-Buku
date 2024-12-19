

<?php $__env->startSection('title', 'Report Pinjaman'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Report Pinjaman</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Siswa</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($transaksi->siswa->nama); ?></td>
                <td><?php echo e($transaksi->buku->judul); ?></td>
                <td><?php echo e($transaksi->tanggal_pinjam); ?></td>
                <td><?php echo e($transaksi->tanggal_kembali ?? 'Belum Kembali'); ?></td>
                <td><?php echo e(ucfirst($transaksi->status)); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BookKeepingLaravel\resources\views/reports/pinjaman.blade.php ENDPATH**/ ?>