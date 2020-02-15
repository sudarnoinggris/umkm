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
                    <?php foreach ($pendaftar as $data) : ?>
                        <form action="" method="post">
                            <div class="form-group" hidden>
                                <label for="id">id_anggota_umkm</label>
                                <input type="text" class="form-control" id="id" name="id" value="<?= $data['id_anggota_umkm']; ?>" readonly>
                                <small class="form-text text-danger"> <?= form_error('id') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>">
                                <small class="form-text text-danger"> <?= form_error('nama') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="no_ktp">No KTP</label>
                                <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?= $data['no_ktp']; ?>">
                                <small class="form-text text-danger"> <?= form_error('no_ktp') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="pend_terakhir">Pendidikan</label>
                                <input type="text" class="form-control" id="pend_terakhir" name="pend_terakhir" value="<?= $data['pend_terakhir']; ?>">
                                <small class="form-text text-danger"> <?= form_error('pend_terakhir') ?></small>
                            </div>



                            <div class="form-group">
                                <label for="tempat_lahir">tempat_lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $data['tempat_lahir']; ?>">
                                <small class="form-text text-danger"> <?= form_error('tempat_lahir') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">tanggal_lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $data['tanggal_lahir']; ?>">
                                <small class="form-text text-danger"> <?= form_error('tanggal_lahir') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="alamat_rumah">Alamat</label>
                                <input type="text" class="form-control" id="alamat_rumah" name="alamat_rumah" value="<?= $data['alamat_rumah']; ?>">
                                <small class="form-text text-danger"> <?= form_error('alamat_rumah') ?></small>
                            </div>


                            <div class="form-group">
                                <label for="no_telp">no_telp</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $data['no_telp']; ?>">
                                <small class="form-text text-danger"> <?= form_error('no_telp') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $data['email']; ?>">
                                <small class="form-text text-danger"> <?= form_error('email') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?= $data['password']; ?>">
                                <small class="form-text text-danger"> <?= form_error('password') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="npwp_pribadi">npwp_pribadi</label>
                                <input type="text" class="form-control" id="npwp_pribadi" name="npwp_pribadi" value="<?= $data['npwp_pribadi']; ?>">
                                <small class="form-text text-danger"> <?= form_error('npwp_pribadi') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="foto">foto</label>
                                <input type="text" class="form-control" id="foto" name="foto" value="<?= $data['foto']; ?>">
                                <small class="form-text text-danger"> <?= form_error('foto') ?></small>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</div>