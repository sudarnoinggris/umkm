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
                    <?php foreach ($anggota as $data) : ?>
                        <form action="" method="post">

                            <div class="form-group">
                                <label for="id_status">id_status</label>
                                <input type="text" class="form-control" id="id_status" name="id_status" value="<?= $data['id_status']; ?>" readonly>
                                <small class="form-text text-danger"> <?= form_error('id_status') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="id_anggota_umkm">id_anggota_umkm</label>
                                <input type="text" class="form-control" id="id_anggota_umkm" name="id_anggota_umkm" value="<?= $data['id_anggota_umkm']; ?>" readonly>
                                <small class="form-text text-danger"> <?= form_error('id_anggota_umkm') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="id_profil_usaha">id_profil_usaha</label>
                                <input type="text" class="form-control" id="id_profil_usaha" name="id_profil_usaha" value="<?= $data['id_profil_usaha']; ?>" readonly>
                                <small class="form-text text-danger"> <?= form_error('id_profil_usaha') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="name">Nama Usaha</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama_usaha']; ?>">
                                <small class="form-text text-danger"> <?= form_error('nama') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="no_ktp">No KTP</label>
                                <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?= $data['no_ktp']; ?>">
                                <small class="form-text text-danger"> <?= form_error('no_ktp') ?></small>
                            </div>
                            <button type="submit" class="btn btn-info">Unvalidasi</button>

                        </form>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</div>