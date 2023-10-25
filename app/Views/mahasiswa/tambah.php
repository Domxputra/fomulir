<!doctype html>
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
            <div class="card-header">
                <h4>Tambah Mahasiswa</h4>
            </div>
            <div class="card-body">
                <form action="<?= base_url('mahasiswa/tambah')?>" method="post">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengap" placeholder="masukkan masukan nama lengkap">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lair</label>
                    <input type="text" class="form-control" name="tanggal_lahir" placeholder="masukkan Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" placeholder="masukkan Jenis Kelamin">
                </div>
                <div class="form-group">
                    <label for="">Asal Sma/Smk/Stm</label>
                    <input type="text" class="form-control" name="asal_sma" placeholder="masukkan Asal Sma/SKM/STM">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email_mhs_baru" placeholder="masukkan Email">
                </div>
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" class="form-control" name="no_tlp" placeholder="masukkan No Telepon">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status" placeholder="masukkan Status">
                </div>
                <div class="form-group">
                    <label for="">Kode Pos</label>
                    <input type="text" class="form-control" name="kode_pos" placeholder="masukkan Kode Pos">
                </div>
                <div class="form-group">
                    <label for="">Sumber Biaya</label>
                    <input type="text" class="form-control" name="sumber_biaya" placeholder="masukkan Sumber Biaya">
                </div>
                <div class="form-group">
                    <label for="">Informasi</label>
                    <input type="text" class="form-control" name="informasi" placeholder="masukkan Informasi">
                </div>
                

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>