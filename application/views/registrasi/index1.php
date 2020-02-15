<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/') . 'logo.png'; ?>" alt="logo">
                                    <p></p>
                                </div>
                                <div class="text-center">
                                    <h3>Registrasi Pendaftaran</h3>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('registrasi'); ?>">
                                    <div class="form-group">
                                        <label for="username">username</label>
                                        <input type="text" class="form-control form-control-user" id="userid" name="userid" aria-describedby="emailHelp" placeholder="UserId" value="<?= set_value('userid'); ?>">
                                        <?= form_error('userid', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth') ?>">Sudah Punya Akun Login ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>