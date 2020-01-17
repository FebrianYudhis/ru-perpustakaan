<div class="main-content-inner">
    <div class="container">
        <div class="row mt-4 ml-4">
            <table class="table table-striped table-bordered" id="datatable">
                <thead>
                    <tr class="thead-dark">
                        <th>#</th>
                        <th>Kode Buku</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Cetakan</th>
                        <th>Tanggal Pembelian</th>
                        <th>Harga Beli</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach ($buku->result_array() as $b):
                            $this->db->where('id_kategori',$b['id_kategori']);
                            $kategori = $this->db->get('kategori')->row_array();
                    ?>
                    <tr>
                        <td><?= $no;?></td>
                        <td><?= $b['kode_buku'];?></td>
                        <td><?= $kategori['jenis_kategori'];?></td>
                        <td><?= $b['judul'];?></td>
                        <td><?= $b['pengarang'];?></td>
                        <td><?= $b['penerbit'];?></td>
                        <td><?= $b['tahun_cetakan'];?></td>
                        <td><?= $b['tgl_pembelian'];?></td>
                        <td><?= $b['harga_beli'];?></td>
                        <td>
                            <a href="<?= base_url();?>kelola/editbuku/<?= $b['kode_buku'];?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="<?= base_url();?>kelola/hapusbuku/<?= $b['kode_buku'];?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                        <?php $no++; endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>