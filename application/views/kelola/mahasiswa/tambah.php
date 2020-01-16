
<div class="main-content-inner">
    <div class="container">
        <div class="row">
            <div class="card border-success mb-3 mt-3 mx-auto center" style="min-width:25em;">
                <div class="card-header bg-transparent border-success"><h3>Tambah Data Mahasiswa</h3></div>
                <div class="card-body text-success">
                    <p class="card-text">
                        <form method="POST" action="<?= base_url();?>kelola/tambahmahasiswa">
                            <div class="form-group">
                                <label for="nama">NIM :</label>
                                <input type="number" class="form-control" placeholder="Masukkan NIM" name="nim" value="<?= set_value('nim');?>">
                                <?= form_error('nim','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama mahasiswa :</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama mahasiswa" name="nama" value="<?= set_value('nama');?>">
                                <?= form_error('nama','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="tempat">Tempat lahir :</label>
                                <input type="text" class="form-control" placeholder="Masukkan tempat lahir" name="tempat" value="<?= set_value('tempat');?>">
                                <?= form_error('tempat','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal lahir :</label>
                                <input type="date" class="form-control" placeholder="Masukkan tanggal lahir" name="tanggal" value="<?= set_value('tanggal');?>">
                                <?= form_error('tanggal','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin :</label>
                                <select class="form-control" name="jk">
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <input type="text" class="form-control" placeholder="Masukkan alamat" name="alamat" value="<?= set_value('alamat');?>">
                                <?= form_error('alamat','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="kontak">Kontak :</label>
                                <input type="text" class="form-control" placeholder="Masukkan nomor telephone" name="kontak" value="<?= set_value('kontak');?>">
                                <?= form_error('kontak','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" class="form-control" placeholder="Masukkan alamat email" name="email" value="<?= set_value('email');?>">
                                <?= form_error('email','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
