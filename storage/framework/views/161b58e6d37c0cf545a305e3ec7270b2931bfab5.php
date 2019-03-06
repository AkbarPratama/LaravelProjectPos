<?php /* C:\Users\Akbar Pratama\laravelprojectpos\resources\views/kategori/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content-inner">
    <h2>Edit Data Produk</h2>
        <?php if(session('sukses')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('sukses')); ?>

        </div>
        <?php endif; ?>
                <div class="row">
                    <div class="col-lg-10">

                    <form action="/kategori/<?php echo e($kategori->id); ?>/update" method="POST">
                    <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Nama Kategori</label>
                            <input name="nama_kategori" class="form-control" type="text" placeholder="Masukkan Nama Produk" id="example-text-input" value="<?php echo e($kategori->nama_kategori); ?>">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Merk</label>
                            <input name="merk" class="form-control" type="text" placeholder="Masukkan Harga" id="example-text-input" value="<?php echo e($kategori->merk); ?>">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Detail</label>
                            <input name="detail" class="form-control" type="text" placeholder="Masukkan Stok" id="example-text-input" value="<?php echo e($kategori->detail); ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>