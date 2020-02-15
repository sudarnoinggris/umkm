<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class='row'>
        <div class='col-lg'>
            <div class="card">
                <h5 class="card-header text-white bg-primary"><?= $title; ?></h5>
                <div class="card-body">
                    <a href="<?= base_url('profil') . '/add'; ?>" class="btn btn-success mb-3"> Add profil</a>
                    <table id="dataTable" class="table table-hover table-bordered">
                        <thead class="text-white bg-primary">
                            <tr>
                                <th scope="col" hidden>id</th>

                                <th scope="col">Nama Usaha</th>
                                <th scope="col">Jenis kegiatan</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Legalitas</th>
                                <th scope="col">Produk</th>

                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($profil as $data) : ?>
                                <tr>
                                    <td hidden><?= $data['id_profil_usaha']; ?></td>
                                    <td><?= $data['nama_usaha']; ?></td>
                                    <td><?= $data['jenis_kegiatan_utama']; ?></td>
                                    <td><?= $data['nama_produk']; ?></td>
                                    <td><?= $data['merk_produk']; ?></td>
                                    <td><?= $data['alamat_usaha']; ?></td>
                                    <td><a href="<?= base_url() . 'assets/img/profil/' . $data['legalitas']; ?>" target="_blank"><img src="<?= base_url() . 'assets/img/profil/' .  $data['legalitas']; ?>" width="100"></a></td>
                                    <td><a href="<?= base_url() . 'assets/img/profil/' . $data['foto_produk']; ?>" target="_blank"><img src="<?= base_url() . 'assets/img/profil/' .  $data['foto_produk']; ?>" width="100"></a></td>



                                    <td>
                                        <a href="<?= base_url('profil/edit/') . $data['id_profil_usaha']; ?>" class="btn btn-sm btn-success">edit</a>
                                        <a href="<?= base_url('profil/delete/') . $data['id_profil_usaha']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data');">delete</a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Page level custom scripts -->
<script src="<?= base_url('assets') ?>/js/demo/datatables-demo.js"></script>