<header style="margin-top: 0px; " class="new-block main-header home2">
	<div class="fixed-bg" style="background: url('<?= base_url(); ?>assets/images/a.png');"></div>
	<div class="overlay"></div>
	<div class="top-nav new-block">
		<div class="container">
			<div class="nav-wrapper">

				<div class="logo">
					<a href="<?= base_url('home') ?>"><img src="<?= base_url(); ?>assets/images/logo2.png" alt="logo" class="img-responsive"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="main-nav new-block home2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">

					<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
					<nav class="nav">
						<ul class="list-unstyled">

							<li><a href="<?= base_url() ?>">Home</a></li>
							<li><a href="#menu-makanan">Menu Makanan</a></li>
							<?php if(isset($masuk)){ ?>
							<li ><a href="<?= base_url('pembayaran') ?>"><i class="flaticon-shopping-bag" ></i></a> <div class="badge badge-warning" ><?= $this->cart->total_items() ?></div></li>
							<li class="drop"><a href="" class="flaticon-profile"></a>
								<ul class="drop-down">
									<li><a href="<?= base_url('saldo') ?>/tambah_saldo/" style="color:black;font-size:12px;font-weight: bold;">Saldo : <?= rupiah($saldo) ?></a></li>
									<?php if($role==='admin'){ ?> <li ><a href="<?= base_url('database') ?>" style="color:black;">Database</a></li><?php } ?>
									<li><a href="<?= base_url('logout') ?>" style="color:black;">Logout</a></li>
								</ul>
							</li>
							
							<?php } else { ?>

							<li><a href="<?= base_url('login') ?>"><i class="flaticon-profile" style="margin-right: 10px;"></i>Login</a></li>
							
							<?php } ?>
						</ul>

					</nav>
				</div>
			</div>
		</div>
	</div>
</header>