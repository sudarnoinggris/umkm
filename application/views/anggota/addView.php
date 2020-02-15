<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<h5 class="card-header text-white bg-success"><?= $subtitle ?></h5>
				<div class="card-body">

					<form action="" method="post">
						<div class="form-group">
							<label for="username">username</label>
							<input type="text" class="form-control" id="username" name="username">
							<small class="form-text text-danger"> <?= form_error('username') ?></small>
						</div>
						<div class="form-group">
							<label for="password">password</label>
							<input type="password" class="form-control" id="password" name="password">
							<small class="form-text text-danger"> <?= form_error('password') ?></small>
						</div>
						<div class="form-group">
							<label for="name">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama">
							<small class="form-text text-danger"> <?= form_error('nama') ?></small>
						</div>

						<div class="form-group">
							<label for="alamat">alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat">
							<small class="form-text text-danger"> <?= form_error('alamat') ?></small>
						</div>
						<div class="form-group">
							<label for="email">email</label>
							<input type="text" class="form-control" id="email" name="email">
							<small class="form-text text-danger"> <?= form_error('email') ?></small>
						</div>
						<div class="form-group">
							<label for="jabatan">jabatan</label>
							<input type="text" class="form-control" id="jabatan" name="jabatan">
							<small class="form-text text-danger"> <?= form_error('jabatan') ?></small>
						</div>

						<div class="form-group">
							<label for="level">level</label>
							<select class="form-control" id="level" name="level">
								<?php foreach ($level as $u) : ?>
									<option value="<?= $u['levelid'] ?>"><?= $u['nama'] ?>
									</option>
								<?php endforeach; ?>
							</select>

							<small class="form-text text-danger"> <?= form_error('level') ?></small>
						</div>



						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
