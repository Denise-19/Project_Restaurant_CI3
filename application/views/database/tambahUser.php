
		<center><font size="6">Tambah Data User</font></center>
		<hr>
		<?php if(validation_errors()) : ?>
		<div class="alert alert-danger" role="alert">
			<?= validation_errors() ?>
		</div>
		<?php endif; ?>
		<form action="" method="post">
	
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Username :</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="username" class="form-control" size="4" required>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Password :</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="password" name="password" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Password Confirmation:</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="password" name="passconf" class="form-control" size="4" required>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email :</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="email" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Role :</label>
				<div class="col-md-6 col-sm-6">
					<select name="role" class="form-control" required>
						<option value="">Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Saldo :</label>
				<div class="col-md-6 col-sm-6">
					<input type="number" name="saldo" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan"></input>
			</div>
		</form>
	</div>