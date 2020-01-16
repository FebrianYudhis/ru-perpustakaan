<div class="main-content-inner">
    <div class="container">
        <div class="row mt-4 ml-4">
            <table class="table table-striped table-bordered" id="datatable">
                <thead>
                    <tr class="thead-dark">
                        <th>#</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach ($mahasiswa->result_array() as $m):
                    ?>
                    <tr>
                        <td><?= $no;?></td>
                        <td><?= $m['nim'];?></td>
                        <td><?= $m['nama_mahasiswa'];?></td>
                        <td><?= $m['tempat_lahir'];?></td>
                        <td><?= $m['tanggal_lahir'];?></td>
                        <td><?= $m['jenis_kelamin'];?></td>
                        <td><?= $m['alamat'];?></td>
                        <td><?= $m['kontak'];?></td>
                        <td><?= $m['email'];?></td>
                        <td>
                            <a href=""><i class="fa fa-pencil-square-o"></i></a>
                            <a href=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                        <?php $no++; endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>