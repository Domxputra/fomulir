<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Mahasiswa</h4>
            </div>
            <form action="" method="post">
                <div class="card-body">
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
<?= $this->endSection() ?>