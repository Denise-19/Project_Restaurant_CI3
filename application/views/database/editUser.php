<center>
			<font size="6">Edit Data user</font>
		</center>
		<hr>
		
		
		<form action="" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Username :</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="username" class="form-control" value="<?= $dataUser['username']?>" size="4" required>
					<input type="hidden" name="id" class="form-control" size="4" value="<?= $dataUser['id']; ?>">
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Password :</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="password" class="form-control" value="<?= $dataUser['password']?>" size="4" required>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email :</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="email" class="form-control" value="<?= $dataUser['email']?>" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Role :</label>
				<div class="col-md-6 col-sm-6">
					<select name="role" class="form-control" required>
						<option value="<?= $dataUser['role']?>"><?= $dataUser['role']?></option>
						<option value="">Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
					</select>
				</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Saldo :</label>
				<div class="col-md-6 col-sm-6">
					<input type="number" name="saldo" value="<?= $dataUser['saldo']?>" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
				<button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
			</div>
		</form>
	</div>