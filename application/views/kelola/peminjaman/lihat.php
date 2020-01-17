<div class="main-content-inner">
    <div class="container">
        <div class="row mt-4 ml-4">
            <table class="table table-striped table-bordered" id="datatable">
                <thead>
                    <tr class="thead-dark">
                        <th>#</th>
                        <th>Id Pinjaman</th>
                        <th>Kode Buku</th>
                        <th>Nama Mahasiswa</th>
                        <th>Petugas</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach ($pinjam->result_array() as $p):
                            $petugas = $this->db->get('petugas',['id_petugas' => $p['id_petugas']])->row_array();
                            $nama = $this->db->get('mahasiswa',['nim' => $p['nim']])->row_array();
                    ?>
                    <tr>
                        <td><?= $no;?></td>
                        <td><?= $p['id_pinjam'];?></td>
                        <td><?= $p['kode_buku'];?></td>
                        <td><?= $nama['nama_mahasiswa'];?> (<?= $p['nim'];?>)</td>
                        <td><?= $petugas['nama_petugas'];?></td>
                        <td><?= $p['tgl_pinjam'];?></td>
                        <td><?= $p['tgl_kembali'];?></td>
                        <td>
                            <a href="<?= base_url();?>kelola/editpeminjaman/<?= $p['id_pinjam'];?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="<?= base_url();?>kelola/hapuspeminjaman/<?= $p['id_pinjam'];?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                        <?php $no++; endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>