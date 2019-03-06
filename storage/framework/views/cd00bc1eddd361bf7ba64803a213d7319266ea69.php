<?php /* C:\Users\Akbar Pratama\laravelprojectpos\resources\views/transaksi/tambah.blade.php */ ?>
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
						<form action="/transaksi/create" method="POST"> 
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="example-date-input" class="col-form-label">Tanggal</label>
                            <input name="tgl" class="form-control" type="date" id="example-date-input">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Barang</label>
                            <select name="kategori_id" class="form-control">
                            <?php $__currentLoopData = $data_produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($p->id); ?>"><?php echo e($p->nama_produk); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Harga</label>
                            <input name="harga" class="form-control" type="text" id="example-text-input">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Jumlah</label>
                            <input name="jumlah" class="form-control" type="text" placeholder="Masukkan jumlah" id="example-text-input">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Total</label>
                            <input name="total" class="form-control" type="text" placeholder="Masukkan jumlah" id="example-text-input">
                        </div>                
                        
                        <div class="modal-footer">
       						<button type="submit" class="btn btn-secondabutton">Save</button>
   						</div>
                    </form>
                </div>
            </div>
        </div>                   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>