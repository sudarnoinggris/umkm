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
                    <?php foreach ($profil as $data) : ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group" hidden>
                                <label for="id_profil_usaha">id_profil_usaha</label>
                                <input type="text" class="form-control" id="id_profil_usaha" name="id_profil_usaha" value="<?= $data['id_profil_usaha']; ?>" readonly>
                                <small class="form-text text-danger"> <?= form_error('id_profil_usaha') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="nama_usaha">Nama Usaha</label>
                                <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" value="<?= $data['nama_usaha']; ?>">
                                <small class="form-text text-danger"> <?= form_error('nama_usaha') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kegiatan_utama">Jenis Kegiatan</label>
                                <input type="text" class="form-control" id="jenis_kegiatan_utama" name="jenis_kegiatan_utama" value="<?= $data['jenis_kegiatan_utama']; ?>">
                                <small class="form-text text-danger"> <?= form_error('jenis_kegiatan_utama') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $data['nama_produk']; ?>">
                                <small class="form-text text-danger"> <?= form_error('nama_produk') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="merk_produk">Merk Produk</label>
                                <input type="text" class="form-control" id="merk_produk" name="merk_produk" value="<?= $data['merk_produk']; ?>">
                                <small class="form-text text-danger"> <?= form_error('merk_produk') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="alamat_usaha">Alamat Usaha</label>
                                <input type="text" class="form-control" id="alamat_usaha" name="alamat_usaha" value="<?= $data['alamat_usaha']; ?>">
                                <small class="form-text text-danger"> <?= form_error('alamat_usaha') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="status_tempat_usaha">Status Tempat Usaha</label>
                                <input type="text" class="form-control" id="status_tempat_usaha" name="status_tempat_usaha" value="<?= $data['status_tempat_usaha']; ?>">
                                <small class="form-text text-danger"> <?= form_error('status_tempat_usaha') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="tahun_berdiri">Tahun Berdiri</label>
                                <input type="date" class="form-control" id="tahun_berdiri" name="tahun_berdiri" value="<?= $data['tahun_berdiri']; ?>">
                                <small class="form-text text-danger"> <?= form_error('tahun_berdiri') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No Telp</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $data['no_telp']; ?>">
                                <small class="form-text text-danger"> <?= form_error('no_telp') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="email_usaha">Email Usaha</label>
                                <input type="text" class="form-control" id="email_usaha" name="email_usaha" value="<?= $data['email_usaha']; ?>">
                                <small class="form-text text-danger"> <?= form_error('email_usaha') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="badan_usaha">Badan Usaha</label>
                                <input type="text" class="form-control" id="badan_usaha" name="badan_usaha" value="<?= $data['badan_usaha']; ?>">
                                <small class="form-text text-danger"> <?= form_error('badan_usaha') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="npwp_usaha">NPWP Usaha</label>
                                <input type="text" class="form-control" id="npwp_usaha" name="npwp_usaha" value="<?= $data['npwp_usaha']; ?>">
                                <small class="form-text text-danger"> <?= form_error('npwp_usaha') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="berkas">Foto</label>
                                <input type="file" accept="image/*" id="berkas" name="berkas" onchange="previewberkas();">
                                <img id="berkas-preview" alt="berkas preview" style="display:none; width : 250px;height : 150px;" />
                                <!-- <input type="text" class="form-control" id="UploadHasil" name="UploadHasil"> -->
                            </div>
                            <div class="form-group">
                                <label for="berkas2">Legalitas</label>
                                <input type="file" accept="image/*" id="berkas2" name="berkas2" onchange="previewberkas2();">
                                <img id="berkas-preview2" alt="Legalitas" style="display:none; width : 250px;height : 150px;" />
                                <!-- <input type="text" class="form-control" id="UploadHasil" name="UploadHasil"> -->
                            </div>
                            <!-- untuk tidak edit -->
                            <input type="hidden" id="legalitas" name="legalitas" value="<?= $data['legalitas']; ?>" readonly>
                            <input type="hidden" id="foto_produk" name="foto_produk" value="<?= $data['foto_produk']; ?>" readonly>

                            <div class="form-group" hidden>
                                <label for="id_anggota_umkm">id_anggota_umkm</label>
                                <input type="text" class="form-control" id="id_anggota_umkm" name="id_anggota_umkm" value="<?= $data['id_anggota_umkm']; ?>">
                                <small class="form-text text-danger"> <?= form_error('id_anggota_umkm') ?></small>
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    function previewberkas() {
        document.getElementById("berkas-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("berkas").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("berkas-preview").src = oFREvent.target.result;
        };
    };

    function previewberkas2() {
        document.getElementById("berkas-preview2").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("berkas2").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("berkas-preview2").src = oFREvent.target.result;
        };
    };
</script>