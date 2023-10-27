<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<body style="background-color: gray;">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Orang Tua</h4>
            </div>
            <form action="" method="post">
            <div class="card-body">
                    <div class="form-group">
                      <label for="">NIK Ayah</label>
                      <input type="text"
                        class="form-control" name="nik_ayah" placeholder="masukkan nik ayah">
                    </div>
                    <div class="form-group">
                      <label for="">Nama Ayah</label>
                      <input type="text"
                        class="form-control" name="nama_ayah" placeholder="masukkan Nama ayah">
                    </div>
                    <div class="form-group">
                      <label for="">NIK Ibu</label>
                      <input type="text"
                        class="form-control" name="nik_ibu" placeholder="masukkan nik ibu">
                    </div>
                    <div class="form-group">
                      <label for="">Nama Ibu</label>
                      <input type="text"
                        class="form-control" name="nama_ibu" placeholder="masukkan nama ibu">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>