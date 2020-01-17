
<div class="main-content-inner">
    <div class="container">
        <div class="row">
            <div class="card border-success mb-3 mt-3 mx-auto center" style="min-width:25em;">
                <div class="card-header bg-transparent border-success"><h3>Edit Data Mahasiswa</h3></div>
                <div class="card-body text-success">
                    <p class="card-text">
                        <form method="POST" action="<?= base_url();?>kelola/editmahasiswa/<?= $mahasiswa['nim'];?>">
                            <div class="form-group">
                                <label for="nama">Nama mahasiswa :</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama mahasiswa" name="nama" value="<?= $mahasiswa['nama_mahasiswa'];?>">
                                <?= form_error('nama','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="tempat">Tempat lahir :</label>
                                <input type="text" class="form-control" placeholder="Masukkan tempat lahir" name="tempat" value="<?= $mahasiswa['tempat_lahir'];?>">
                                <?= form_error('tempat','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal lahir :</label>
                                <input type="date" class="form-control" placeholder="Masukkan tanggal lahir" name="tanggal" value="<?= $mahasiswa['tanggal_lahir'];?>">
                                <?= form_error('tanggal','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin :</label>
                                <select class="form-control" name="jk">
                                <option value="Laki-laki" <?php if($mahasiswa['jenis_kelamin']=='Laki-laki'){ echo 'selected';} ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if($mahasiswa['jenis_kelamin']=='Perempuan'){ echo 'selected';} ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <input type="text" class="form-control" placeholder="Masukkan alamat" name="alamat" value="<?= $mahasiswa['alamat'];?>">
                                <?= form_error('alamat','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="kontak">Kontak :</label>
                                <input type="text" class="form-control" placeholder="Masukkan nomor telephone" name="kontak" value="<?= $mahasiswa['kontak'];?>">
                                <?= form_error('kontak','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" class="form-control" placeholder="Masukkan alamat email" name="email" value="<?= $mahasiswa['email'];?>">
                                <?= form_error('email','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
