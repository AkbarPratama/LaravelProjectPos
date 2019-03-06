<?php /* C:\Users\Akbar Pratama\laravelprojectpos\resources\views/produk/edit.blade.php */ ?>
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

                    <form action="/produk/<?php echo e($produk->id); ?>/update" method="POST">
                    <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Nama Produk</label>
                            <input name="nama_produk" class="form-control" type="text" placeholder="Masukkan Nama Produk" id="example-text-input" value="<?php echo e($produk->nama_produk); ?>">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Ukuran</label>
                            <select name="ukuran" class="form-control">
                                <option value="Small" <?php if($produk->ukuran == 'Small'): ?> selected <?php endif; ?>>Small</option>
                                <option value="Medium" <?php if($produk->ukuran == 'Medium'): ?> selected <?php endif; ?>>Medium</option>
                                <option value="Large" <?php if($produk->ukuran == 'Large'): ?> selected <?php endif; ?>>Large</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Harga</label>
                            <input name="harga" class="form-control" type="text" placeholder="Masukkan Harga" id="example-text-input" value="<?php echo e($produk->harga); ?>">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Ukuran</label>
                            <select name="kategori_id" class="form-control">
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->nama_kategori); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Stok</label>
                            <input name="stok" class="form-control" type="text" placeholder="Masukkan Stok" id="example-text-input" value="<?php echo e($produk->stok); ?>">
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