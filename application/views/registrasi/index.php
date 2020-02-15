<div class="container">
    <div class="row mt-3">
        <div class="col-md">
            <div class="card">
                <h5 class="card-header text-white bg-success"><?= $title ?></h5>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
               
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email">
                            <small class="form-text text-danger"> <?= form_error('email') ?></small>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" id="password" name="password">
                            <small class="form-text text-danger"> <?= form_error('password') ?></small>
                        </div>

                       
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"> <?= form_error('nama') ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select class="form-control" id="jenis" name="jenis">
                           
                                <?php foreach ($jenis as $u) : ?>
                                    <option value="<?= $u['id'] ?>"><?= $u['nama'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"> <?= form_error('jenis') ?></small>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Jenis Kategori Usaha</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <?php foreach ($kategori as $u) : ?>
                                    <option value="<?= $u['id'] ?>"><?= $u['nama'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"> <?= form_error('kategori') ?></small>
                        </div>


                        <div class="form-group">
                            <label for="no_ktp">No KTP</label>
                            <input type="text" class="form-control" id="no_ktp" name="no_ktp">
                            <small class="form-text text-danger"> <?= form_error('no_ktp') ?></small>
                        </div>
                       
                        <div class="form-group">
                            <label for="pend_terakhir">Pendidikan</label>
                            <input type="text" class="form-control" id="pend_terakhir" name="pend_terakhir">
                            <small class="form-text text-danger"> <?= form_error('pend_terakhir') ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                            <small class="form-text text-danger"> <?= form_error('tempat_lahir') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                            <small class="form-text text-danger"> <?= form_error('tanggal_lahir') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat_rumah">Alamat</label>
                            <input type="text" class="form-control" id="alamat_rumah" name="alamat_rumah">
                            <small class="form-text text-danger"> <?= form_error('alamat_rumah') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telp</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp">
                            <small class="form-text text-danger"> <?= form_error('no_telp') ?></small>
                        </div>



                        <div class="form-group">
                            <label for="npwp_pribadi">NPWP Pribadi</label>
                            <input type="text" class="form-control" id="npwp_pribadi" name="npwp_pribadi">
                            <small class="form-text text-danger"> <?= form_error('npwp_pribadi') ?></small>
                        </div>


                        <div class="form-group">
                            <label for="berkas">Foto</label>
                            <input type="file" accept="image/*" id="berkas" name="berkas" onchange="previewberkas();">
                            <img id="berkas-preview" alt="berkas preview" style="display:none; width : 250px;height : 150px;" />
                            <!-- <input type="text" class="form-control" id="UploadHasil" name="UploadHasil"> -->
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="auth" class="btn btn-primary">Back to Login</a>
                    </form>
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
</script>