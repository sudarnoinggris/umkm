<div class="container">
    <div class="row mt-3">
        <div class="col-md">
            <div class="card">
                <h5 class="card-header text-white bg-success"><?= $subtitle ?></h5>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>
                    <?php foreach ($user as $data) : ?>
                        <form action="" method="post">
                            <div class="form-group" hidden>
                                <label for="id_user">id_user</label>
                                <input type="text" class="form-control" id="id_user" name="id_user" value="<?= $data['id_user']; ?>" readonly>
                                <small class="form-text text-danger"> <?= form_error('id_user') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $data['username']; ?>">
                                <small class="form-text text-danger"> <?= form_error('username') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat']; ?>">
                                <small class=" form-text text-danger"> <?= form_error('alamat') ?></small>
                            </div>
                            <div class=" form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>">
                                <small class="form-text text-danger"> <?= form_error('nama') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $data['email']; ?>">
                                <small class=" form-text text-danger"> <?= form_error('email') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $data['jabatan']; ?>">
                                <small class=" form-text text-danger"> <?= form_error('jabatan') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="level">Level</label>
                                <select class="form-control" id="level" name="level">
                                    <?php foreach ($level as $u) : ?>
                                        <?php if ($data['level'] == $u['levelid']) : ?>
                                            <option value="<?= $u['levelid'] ?>" selected><?= $u['nama'] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $u['levelid'] ?>"><?= $u['nama'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>

                                <small class="form-text text-danger"> <?= form_error('level') ?></small>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</div>