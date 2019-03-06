<?php /* C:\Users\Akbar Pratama\laravelprojectpos\resources\views/kategori/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content-inner">
        <?php if(session('sukses')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('sukses')); ?>

        </div>
        <?php endif; ?>
                <div class="row">
                    <!-- table primary start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="accordion1" class="according accordion-s2">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#accordion11">Data Kategori</a>
                                        </div>
                                        <div id="accordion11" class="collapse show" data-parent="#accordion1">
                                        <div class="card-body">
                                <div class="col-lg-10 mt-5">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-flat btn-danger btn-xs mb-3" data-toggle="modal" data-target="#exampleModalLong">Input Data Baru</button>                                
                                    <form class="col-15 float-right" action="#">
                                <input type="text" name="cari" placeholder="Search..." required="">
                                <i class="ti-search"></i>
                                </form>
                                </div>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">Nama kategori</th>
                                                    <th scope="col">Merk</th>
                                                    <th scope="col">Detail</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th><?php echo e($kategori->nama_kategori); ?></th>
                                                    <td><?php echo e($kategori->merk); ?></td>
                                                    <td><?php echo e($kategori->detail); ?></td>
                                                    <td>
                                                        <a href="/kategori/<?php echo e($kategori->id); ?>/edit" class="fa fa-edit"></a>
                                                        <a href="/kategori/<?php echo e($kategori->id); ?>/delete" class="ti-trash" onclick="return confirm('Yakin Mau Dihapus')"></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                        <?php echo e($data_kategori->links()); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>


<div class="modal fade" id="exampleModalLong">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="/kategori/create" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Nama Kategori</label>
                                            <input name="nama_kategori" class="form-control" type="text" placeholder="Masukkan Nama Kategori" id="example-text-input">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Merk</label>
                                            <input name="merk" class="form-control" type="text" placeholder="Masukkan Merk" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Detail</label>
                                            <input name="detail" class="form-control" type="text" placeholder="Masukkan Detail" id="example-text-input">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-secondabutton">Save</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Textual inputs end -->            
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>