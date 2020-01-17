<div class="main-content-inner">
    <div class="container">
        <div class="row">
            <div class="card border-success mb-3 mt-3 mx-auto center" style="min-width:25em;">
                <div class="card-header bg-transparent border-success"><h3>Edit Data Buku</h3></div>
                    <div class="card-body text-success">
                        <p class="card-text">
                        <form method="POST" action="<?= base_url();?>kelola/editbuku/<?= $buku['kode_buku'];?>">
                            <div class="form-group">
                                <label for="kategori">Pilih Kategori</label>
                                <select class="form-control" name="kategori">
                                <?php foreach($kategori->result_array() as $k): ?>
                                    <option value="<?= $k['id_kategori'];?>" <?php if($buku['id_kategori']==$k['id_kategori']){echo 'selected';}?>><?= $k['jenis_kategori'];?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul Buku :</label>
                                <input type="text" class="form-control" placeholder="Masukkan judul buku" name="judul" value="<?= $buku['judul'];?>">
                                <?= form_error('judul','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="pengarang">Pengarang Buku :</label>
                                <input type="text" class="form-control" placeholder="Masukkan pengarang buku" name="pengarang" value="<?= $buku['pengarang'];?>">
                                <?= form_error('pengarang','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Penerbit Buku :</label>
                                <input type="text" class="form-control" placeholder="Masukkan penerbit buku" name="penerbit" value="<?= $buku['penerbit'];?>">
                                <?= form_error('penerbit','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun Cetakan Buku :</label>
                                <input type="number" class="form-control" name="tahun" value="<?= $buku['tahun_cetakan'];?>">
                                <?= form_error('tahun','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="pembelian">Tanggal Pembelian Buku :</label>
                                <input type="date" class="form-control" name="pembelian" value="<?= $buku['tgl_pembelian'];?>">
                                <?= form_error('pembelian','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Beli Buku :</label>
                                <input type="number" class="form-control" placeholder="Masukkan harga beli buku" name="harga" value="<?= $buku['harga_beli'];?>">
                                <?= form_error('harga','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>