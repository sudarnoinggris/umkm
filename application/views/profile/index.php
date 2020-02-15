<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . 'default.png'; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama'] ?></h5>
                    <p class="card-text"><?= $user['email'] ?></p>

                    <form method="post" action="">
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="userpassword" name="userpassword" placeholder="Ubah Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Ubah Password
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->