<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('message')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            <?php endif; ?>
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
                            <div class="form-group">
                                <label for="userid">UserId</label>
                                <input type="text" class="form-control" id="userid" name="userid" value="<?= $data['userid']; ?>" readonly>
                                <small class="form-text text-danger"> <?= form_error('userid') ?></small>
                            </div>

                            <div class=" form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password">
                                <small class="form-text text-danger"> <?= form_error('password') ?></small>
                            </div>





                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</div>