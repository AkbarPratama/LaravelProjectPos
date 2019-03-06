<?php /* C:\Users\Akbar Pratama\laravelprojectpos\resources\views//produk/edit.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produk</title>

	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/images/icon/favicon.ico')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/metisMenu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slicknav.min.css')); ?>">
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/typography.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/default-css.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
    <!-- modernizr css -->
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>

</head>
<body>
<div class="container">
	<div class="main-content-inner">
    <h2>Edit Data Produk</h2>
		<?php if(session('sukses')): ?>
		<div class="alert alert-success" role="alert">
    		<?php echo e(session('sukses')); ?>

		</div>
		<?php endif; ?>
                <div class="row">
                <div class="col-lg-10">
                <form action="produk/{id}/update" method="POST">
                <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Nama Produk</label>
                        <input name="nama_produk" class="form-control" type="text" placeholder="Masukkan Nama Produk" id="example-text-input" value="<?php echo e($produk->nama_produk); ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Ukuran</label>
                        <select name="ukuran" class="form-control">
                            <option value="Small" <?php if($produk->ukuran == 'Small'): ?> selected <?php endif; ?> >Small</option>
                            <option value="Medium" <?php if($produk->ukuran == 'Medium'): ?> selected <?php endif; ?> >Medium</option>
                            <option value="Large" <?php if($produk->ukuran == 'Large'): ?> selected <?php endif; ?> >Large</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Harga</label>
                        <input name="harga" class="form-control" type="text" placeholder="Masukkan Harga" id="example-text-input" value="<?php echo e($produk->harga); ?>">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Stok</label>
                        <input name="stok" class="form-control" type="text" placeholder="Masukkan Stok" id="example-text-input" value="<?php echo e($produk->stok); ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>    
                </div>
                </div>
            </div>
        </div>

	<!-- jquery latest version -->
    <script src="<?php echo e(asset('assets/js/vendor/jquery-2.2.4.min.js')); ?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.slimscroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.slicknav.min.js')); ?>"></script>

    <!-- others plugins -->
    <script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>

</body>
</html>