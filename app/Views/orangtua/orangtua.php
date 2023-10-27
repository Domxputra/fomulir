<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<body style="background-color: gray;">
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Daftar Orang Tua</h4>
                <a href="<?= base_url('orangtua/tambah') ?>" class="btn btn-info btn-sm">Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered ">
                    <tr>
                        <th>No</th>
                        <th>Nik Ayah</th>
                        <th>Nama Ayah</th>
                        <th>Nik Ibu</th>
                        <th>Nama Ibu</th>
                        <th>Alamat</th>
                    </tr>
                    <?php foreach ($orangtua as $key => $item) : ?>
                        <td><?= $key + 1 ?></td>
                        <td><?= $item['nik_ayah'] ?></td>
                        <td><?= $item['nama_ayah'] ?></td>
                        <td><?= $item['nik_ibu'] ?></td>
                        <td><?= $item['nama_ibu'] ?></td>
                        <td>
                            <a href="<?= base_url("orangtua/ubah/") . $item['orangtua'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url("orangtua/hapus/") . $item['orangtua'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>