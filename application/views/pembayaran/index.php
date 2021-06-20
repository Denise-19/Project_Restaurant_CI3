<section  style="margin-top: 100px;" class="shopping-cart new-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table cart-tbl">
							<thead>
								<tr>
									<th class="p_dtl">Product Details</th>
									<th class="p_btn"></th>
									<th class="p_price">Harga</th>
									<th class="p_quantity">Jumlah</th>
									<th class="p_ttl">Total</th>
								</tr>
							</thead>
							<tbody>
							<?php $i = 1; ?>
								<?php foreach($keranjang as $row) : ?>
								<tr>
									<td class="p_dtl">
										<div class="block-stl9">
											<div class="img-holder">
												<img src="<?= base_url(); ?>upload/<?= $row['gambar']; ?>" alt="" class="img-responsive">
											</div>
											<div class="info-block">
												<h5><?= $row['name']; ?></h5>
												<p class="txt-cat"><?= $row['ukuran']; ?></p>
											</div>
										</div>
									</td>
									<form action="<?= base_url('pembayaran/tambah/' . $row['rowid']) ?>" method="post">
									<td class="p_btn">
										<button type="submit" class="btn1 stl3">Tambah</button>
										<a href="<?= base_url('pembayaran/hapus/' . $row['rowid']) ?>" class="btn1 stl3">Hapus</a>
									</td>
									<td class="p_price">
									<?= rupiah($row['price']); ?>
									</td>
									
									<td class="p_quantity">
										<div class="quantity">
											<input type="number" name="<?=$i?>[qty]"class="form-control text-center" value="<?= $row['qty']; ?>" min="0">
										</div>
									</td>
									</form>
									<td class="p_ttl">
										<?=  rupiah($row['subtotal']); ?>
									</td>
								</tr>
								<?php $i++; ?>
								<?php endforeach ?>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</section>

		<section class="loc-cop-sum  new-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="block-stl10 odr-summary">
							<h3>Pembayaran :</h3>
							<ul class="list-unstyled">
								<li><span class="ttl">Saldo Anda </span> <span class="stts"><?= rupiah($saldo) ?></span></li>
								
								
							</ul>
							<div class="ttl-all">
								<span class="ttlnm">Total Bayar</span>
								<span class="odr-stts"><?=rupiah($total_belanja) ?></span>
							</div>
						</div>
						<form action="" method="post">
							<input type="hidden" name="saldo" value="<?= $saldo ?>">
							<input type="hidden" name="harga" value="<?=$total_belanja?>">
							<input type="hidden" name="username" value="<?=$username?>">
							<input type="hidden" name="tanggal" value="<?=date('Y-m-d');?>">
							<button name="submit" class="btn btn1 stl2">Bayar</button>
						
						</form>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-12">
						
					</div>
				</div>
			</div>
		</section>