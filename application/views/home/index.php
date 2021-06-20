<div style="margin-top: -35px; " class="banner slider2 new-block">
    <div class="fixed-bg">
    </div>
    <div class="slider owl-carousel owl-theme">
        <div class="item">
            <div class="slider-block slide2 new-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="img-block img2">
                                <div class="img-holder" data-animation-in="bounceInUp"
                                    data-animation-out="animate-out fadeOutRight">
                                    <img src="assets/images/slider-png1.png" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="text-block-stl1">
                                <div class="title">
                                    <p class="top-h" data-animation-in="fadeInDown"
                                        data-animation-out="animate-out fadeOutRight">Sehat $ Bergizi</p>
                                    <h2 data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">
                                        Terbuat dari bahan organik</h2>
                                    <p class="bottom-p" data-animation-in="fadeInUp"
                                        data-animation-out="animate-out fadeOutRight">Dengan Makan makanan bergizi kita dapat membuat hidup lebih sehat. </p>
                                    <a href="#menu-makanan" class="btn1 stl2" data-animation-in="fadeInUp"
                                        data-animation-out="animate-out fadeOutRight">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .slider-block -->
        </div>
        <div class="item">
            <div class="slider-block slide2 new-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="img-block img2">
                                <div class="img-holder" data-animation-in="bounceInUp"
                                    data-animation-out="animate-out fadeOutRight">
                                    <img style="height:500px;" src="assets/images/pz.png" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="text-block-stl1">
                                <div class="title">
                                    <p class="top-h" data-animation-in="fadeInDown"
                                        data-animation-out="animate-out fadeOutRight">Menggugah Selera</p>
                                    <h2 data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">
                                        Meningkatkan Nafsu Makan</h2>
                                    <p class="bottom-p" data-animation-in="fadeInUp"
                                        data-animation-out="animate-out fadeOutRight">Dengan membeli makanan dari kami kalian akan mendapatkan sajian tampilan yang menambah selera makan. </p>
                                    <a href="#menu-makanan" class="btn1 stl2" data-animation-in="fadeInUp"
                                        data-animation-out="animate-out fadeOutRight">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .slider-block -->
        </div>
    </div>
</div><!-- banner -->


<section style="margin-top: -100px; " class="most-popular new-block" id="menu-makanan">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <p class="top-h">Rasakan Kenikmatannya</p>
                    <h2>Menu Makanan</h2>
                    <div class="btm-style"><span><img src="assets/images/clr2/btm-style.png" alt=""
                                class="img-responsive"></span></div>
                    <p class="bottom-p">Terbuat Dari Bahan Yang Berkualitas, Dimasak Dengan Profesional</p>
                </div>
            </div>
            <?php 
              foreach ($tampilMenu as $row) :        
          ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="block-stl2">
                    <div class="img-holder">
                        <img src="<?= base_url(); ?>upload/<?= $row['gambar']; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="text-block">
                        <h3><?= $row['nama']; ?></h3>
                        <p class="sz">Size : <?= $row['ukuran']; ?></p>
                        <p class="price"><span><?=rupiah($row['harga']); ?></span></p>
                    </div>
                    <div class="btn-sec">
                        <a href="<?= base_url('home') ?>/tambah_ke_keranjang/<?= $row['id']; ?>" class="btn1 stl2">Tambah Ke Keranjang</a>
                    </div>
                    <span class="nonveg veg-nonveg"></span>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>


<section style="margin-top: -100px; " class="fastive-season new-block">
    <div class="overlay"></div>
    <div class="fixed-bg parallax" style="background: url('assets/images/slider-bg1.jpg');"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <p class="top-h">todays special</p>
                    <h2>Best Seller</h2>
                    <div class="btm-style"><span><img src="assets/images/clr2/btm-style.png" alt=""
                                class="img-responsive"></span></div>
                    <p class="bottom-p">Menu yang paling banyak diincar orang-orang lapar</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="item-slider1 owl-carousel owl-theme">
                    <?php 
						foreach ($tampilMenu as $row2) :       
					?>
                    <div class="item">
                        <div class="block-stl2">
                            <div class="img-holder">
                                <img src="<?= base_url(); ?>upload/<?= $row2['gambar']; ?>" alt="" class="img-responsive">
                            </div>
                            <div class="text-block">
                                <h3><?= $row2['nama']; ?></h3>
                                <p class="sz">Size : <?= $row2['ukuran']; ?></p>
                                <p class="price"><span><?=rupiah($row2['harga']); ?></span></p>
                            </div>
                            <div class="btn-sec">
                                <a href="<?= base_url('pembayaran') ?>?id=<?= $row2['id']; ?>" class="btn1 stl2">Tambah Ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>

            </div>
        </div>
    </div>
</section>