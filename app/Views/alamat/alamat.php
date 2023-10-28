<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<body style="background-color: gray;">
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Daftar Alamat Tinggal</h4>
                <a href="<?= base_url("alamat/tambah") ?>" class="btn btn-info btn-sm">Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Jalan</th>
                        <th>Kelurahan</th>
                        <th>RT/RW</th>
                        <th>Kode Pos</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($jurusan as $key => $item) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $item['jalan'] ?></td>
                            <td><?= $item['kelurahan'] ?></td>
                            <td><?= $item['rt_rw'] ?></td>
                            <td><?= $item['kode_pos'] ?></td>
                            <td>
                                <a href="<?= base_url("alamat/ubah/") . $item['kode'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url("alamat/hapus/") . $item['kode'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
   
<?= $this->endSection() ?>