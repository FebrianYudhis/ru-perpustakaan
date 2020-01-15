<div class="main-content-inner">
    <div class="container">
        <div class="row">
            <div class="card border-success mb-3 mt-3 mx-auto center" style="min-width:25em;">
                <div class="card-header bg-transparent border-success"><h3>Tambah Data Kategori</h3></div>
                    <div class="card-body text-success">
                        <p class="card-text">
                        <form method="POST" action="<?= base_url();?>kelola/tambahkategori">
                            <div class="form-group">
                                <label for="nama">Jenis Kategori :</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama kategori" name="kategori" value="<?= set_value('kategori');?>">
                                <?= form_error('kategori','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>