

<?php $__env->startSection('title', 'Detail Transaksi'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Detail Transaksi</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Transaksi ID: <?php echo e($transaksi->id); ?></h5>
            <p class="card-text">
                <strong>Nama Siswa:</strong> <?php echo e($transaksi->siswa->nama); ?> <br>
                <strong>Judul Buku:</strong> <?php echo e($transaksi->buku->judul); ?> <br>
                <strong>Tanggal Pinjam:</strong> <?php echo e($transaksi->tanggal_pinjam); ?> <br>
                <strong>Tanggal Kembali:</strong> <?php echo e($transaksi->tanggal_kembali ?? 'Belum Dikembalikan'); ?> <br>
                <strong>Status:</strong> <?php echo e(ucfirst($transaksi->status)); ?> <br>
            </p>
            <a href="<?php echo e(route('transaksi.index')); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BookKeepingLaravel\resources\views/transaksi/lihat.blade.php ENDPATH**/ ?>