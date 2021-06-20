		<center>
			<font size="6">Edit Menu</font>
		</center>
		<hr>
		
		<form action="" method="post" enctype='multipart/form-data'>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Makanan :</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nama_makanan" class="form-control" size="4" value="<?= $dataMenu['nama']; ?>" required>
					<input type="hidden" name="id" class="form-control" size="4" value="<?= $dataMenu['id']; ?>">
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Harga Makanan :</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="number" name="harga" class="form-control" size="4" value="<?= $dataMenu['harga']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Ukuran Makakan :</label>
				<div class="col-md-6 col-sm-6">
					<select name="ukuran" class="form-control" required>
						<option value="<?= $dataMenu['ukuran']; ?>"><?= $dataMenu['ukuran']; ?></option>
						<option value="Reguler">Reguler</option>
						<option value="Medium">Medium</option>
						<option value="Large">Large</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kategori :</label>
				<div class="col-md-6 col-sm-6">
					<select name="kategori" class="form-control" required>
						<option value="<?= $dataMenu['kategori']; ?>"><?= $dataMenu['kategori']; ?></option>
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
				<div class="col-md-6 col-sm-6 offset-md-3">
					<button type="suubmit" name="ubah" class="btn btn-primary">Ubah</button>
				</div>
		</form>
		</div>