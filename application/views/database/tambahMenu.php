<center><font size="6">Tambah Data Menu</font></center>
		<hr>
		<?php if(validation_errors()) : ?>
		<div class="alert alert-danger" role="alert">
			<?= validation_errors() ?>
		</div>
		<?php endif; ?>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Makanan :</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nama_makanan" class="form-control" size="4" >
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Harga :</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="number" name="harga" class="form-control" size="4" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Ukuran Makanan :</label>
				<div class="col-md-6 col-sm-6">
					<select name="ukuran" class="form-control" required>
						<option value="">Pilih Size</option>
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
						<option value="Large">Large</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kategori Makanan :</label>
				<div class="col-md-6 col-sm-6">
					<select name="kategori" class="form-control" required>
						<option value="">Pilih Kategori</option>
                        <option value="2">Standard</option>
                        <option value="3">New</option>
						<option value="1">Best Seller</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Gambar Makanan :</label>
				<div class="col-md-6 col-sm-6">
					<input type="file" accept="image/*" name="gambar" style="width: 600px;height: 40px;">
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan"></input>
			</div>
		</form>
	</div>