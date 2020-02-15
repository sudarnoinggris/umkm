<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> </h1>



    <!-- /.container-fluid -->
    <table class="table table-bordered table-striped" id="mytable">
        <tbody>
            <?php foreach ($status as $data) : ?>
                <tr>
                    <td>
                        Status
                    </td>
                    <td>
                        <?php if ($data['status'] > 0) {
                            echo "Aktif";
                        } else {
                            echo "Belum Aktif";
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama Pendaftar
                    </td>
                    <td>
                        <?= $data['nama']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        No KTP
                    </td>
                    <td>
                        <?= $data['no_ktp']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Pendidikan Terakhir
                    </td>
                    <td>
                        <?= $data['pend_terakhir']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tempat Lahir
                    </td>
                    <td>
                        <?= $data['tempat_lahir']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanggal Lahir
                    </td>
                    <td>
                        <?= $data['tanggal_lahir']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Alamat Rumah
                    </td>
                    <td>
                        <?= $data['alamat_rumah']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        No Telp
                    </td>
                    <td>
                        <?= $data['no_telp']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <?= $data['email']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        NPWP Pribadi
                    </td>
                    <td>
                        <?= $data['npwp_pribadi']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Foto
                    </td>

                    <td><a href="<?= base_url() . 'assets/img/pendaftar/' . $data['foto']; ?>" target="_blank"><img src="<?= base_url() . 'assets/img/pendaftar/' .  $data['foto']; ?>" width="100"></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>