<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class='row'>
        <div class='col-lg'>
            <div class="card">
                <h5 class="card-header text-white bg-primary"><?= $title; ?></h5>
                <div class="card-body">
                    <!-- <a href="<?= base_url('pendaftar') . '/add'; ?>" class="btn btn-success mb-3"> Add pendaftar</a> -->
                    <table id="dataTable" class="table table-hover table-bordered">
                        <thead class="text-white bg-primary">
                            <tr>
                                <th scope="col" hidden>id</th>
                                <th scope="col" hidden>id_profil_usaha</th>

                                <th scope="col">Nama Usaha</th>
                                <th scope="col">KTP</th>
                                <th scope="col">Pendidikan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Email</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Legalitas</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($pendaftar as $data) : ?>
                                <tr>
                                    <td hidden><?= $data['id_anggota_umkm']; ?></td>
                                    <td hidden><?= $data['id_profil_usaha']; ?></td>
                                    <td><?= $data['nama_usaha']; ?></td>
                                    <td><?= $data['no_ktp']; ?></td>
                                    <td><?= $data['pend_terakhir']; ?></td>
                                    <td><?= $data['alamat_rumah']; ?></td>
                                    <td><?= $data['no_telp']; ?></td>
                                    <td><?= $data['email']; ?></td>
                                    <td><a href="<?= base_url() . 'assets/img/profil/' . $data['foto']; ?>" target="_blank"><img src="<?= base_url() . 'assets/img/profil/' .  $data['foto']; ?>" width="100"></a></td>
                                    <td><a href="<?= base_url() . 'assets/img/profil/' . $data['legalitas']; ?>" target="_blank"><img src="<?= base_url() . 'assets/img/profil/' .  $data['legalitas']; ?>" width="100"></a></td>
                                    <td><a href="<?= base_url() . 'assets/img/profil/' . $data['foto_produk']; ?>" target="_blank"><img src="<?= base_url() . 'assets/img/profil/' .  $data['foto_produk']; ?>" width="100"></a></td>

                                    <td>
                                        <a href="<?= base_url('pendaftar/validasi/') . $data['id_profil_usaha']; ?>" class="btn btn-sm btn-info">Validasi</a>

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