<?php /* C:\Users\Akbar Pratama\laravelprojectpos\resources\views/stok/edit.blade.php */ ?>
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

                    <form action="/stok/<?php echo e($stok->id); ?>/update" method="POST">
                    <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Stok</label>
                            <input name="stok" class="form-control" type="text" placeholder="Masukkan Stok" id="example-text-input" value="<?php echo e($stok->stok); ?>">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Detail</label>
                            <input name="detail" class="form-control" type="text" placeholder="Masukkan Detail" id="example-text-input" value="<?php echo e($stok->detail); ?>">
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