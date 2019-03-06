<?php /* C:\Users\Akbar Pratama\laravelprojectpos\resources\views/layouts/includes/_sidebar.blade.php */ ?>
<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="<?php echo e(asset('assets/images/icon/logo.png')); ?>" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="" ><i class="ti-dashboard"></i><span>dashboard</span></a></li>

                            <li>
                                <a href="" aria-expanded="true"><i class="fa fa-desktop"></i><span>Data
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="/produk">Data Produk</a></li>
                                    <li><a href="/kategori">Data Kategori</a></li>
                                    <li><a href="/stok">Data Stok</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="" aria-expanded="true"><i class="fa fa-tv"></i><span>Transaksi
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="/transaksi">Data Transaksi</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="" aria-expanded="true"><i class="fa fa-tv"></i><span>Refund
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="/refund">Data Refund</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>