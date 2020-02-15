<table id="dataTable" class="table table-hover table-bordered">
    <thead class="text-white bg-primary">
        <tr>
            <th scope="col" hidden>id</th>

            <th scope="col">Nama Usaha</th>
            <th scope="col">KTP</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telp</th>
            <th scope="col">Email</th>


        </tr>
    </thead>
    <tbody>

        <?php foreach ($anggota as $data) : ?>
            <tr>
                <td hidden><?= $data['id_anggota_umkm']; ?></td>
                <td><?= $data['nama_usaha']; ?></td>
                <td><?= $data['no_ktp']; ?></td>
                <td><?= $data['pend_terakhir']; ?></td>
                <td><?= $data['alamat_rumah']; ?></td>
                <td><?= $data['no_telp']; ?></td>
                <td><?= $data['email']; ?></td>


            </tr>

        <?php endforeach; ?>

    </tbody>
</table>