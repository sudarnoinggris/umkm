<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class='row'>
        <div class='col-lg'>
            <div class="card">
                <h5 class="card-header text-white bg-primary"><?= $title; ?></h5>
                <div class="card-body">
                    <a href="<?= base_url('anggota') . '/add'; ?>" class="btn btn-success mb-3"> Add anggota</a>
                    <table id="dataTable" class="table table-hover table-bordered">
                        <thead class="text-white bg-primary">
                            <tr>
                                <th scope="col">id</th>

                                <th scope="col">nama</th>
                                <th scope="col">KTP</th>
                                <th scope="col">Pendidikan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($status as $data) : ?>
                                <tr>
                                    <td><?= $data['id_anggota_umkm']; ?></td>
                                    <td><?= $data['nama']; ?></td>
                                    <td><?= $data['no_ktp']; ?></td>
                                    <td><?= $data['pend_terakhir']; ?></td>
                                    <td><?= $data['alamat_rumah']; ?></td>
                                    <td><?= $data['no_telp']; ?></td>

                                    <td><?= $data['email']; ?></td>
                                    <td><?= $data['status']; ?></td>

                                    <td>
                                        <a href="<?= base_url('anggota/edit/') . $data['id_anggota_umkm']; ?>" class="btn btn-sm btn-success">edit</a>
                                        <a href="<?= base_url('anggota/delete/') . $data['id_anggota_umkm']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data');">delete</a>
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