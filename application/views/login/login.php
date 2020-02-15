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
                                    <h3>Login Anggota</h3>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('login'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="useremail" name="useremail" aria-describedby="emailHelp" placeholder="Email" value="<?= set_value('userid'); ?>">
                                        <?= form_error('useremail', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="userpassword" name="userpassword" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>