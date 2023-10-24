<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color: gray;">
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Daftar Alamat Tinggal</h4>
                <a href="<?= base_url('mahasiswa/tambah') ?>" class="btn btn-info btn-sm">Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengap</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Sma/Smk/Stm</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Status</th>
                        <th>Kode Pos</th>
                        <th>Sumber Biaya</th>
                        <th>Informasi</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($mahasiswa as $key => $item) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $item['nama_lengkap'] ?></td>
                            <td><?= $item['tanggal_lahir'] ?></td>
                            <td><?= $item['jenis_kelamin'] ?></td>
                            <td><?= $item['asal_sma'] ?></td>
                            <td><?= $item['email_mhs_baru'] ?></td>
                            <td><?= $item['no_tlp'] ?></td>
                            <td><?= $item['status'] ?></td>
                            <td><?= $item['kode_pos'] ?></td>
                            <td><?= $item['sumber_biaya'] ?></td>
                            <td><?= $item['informasi'] ?></td>
                            <td>
                                <a href="<?= base_url("mahasiswa/ubah/") . $item['kode'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url("mahasiswa/hapus/") . $item['kode'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>