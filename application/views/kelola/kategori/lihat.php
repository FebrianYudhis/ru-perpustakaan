<div class="main-content-inner">
    <div class="container">
        <div class="row mt-4 ml-4">
            <table class="table table-striped table-bordered " id="datatable">
                <thead>
                    <tr class="thead-dark">
                        <th>#</th>
                        <th>Id Kategori</th>
                        <th>Jenis Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach ($kategori->result_array() as $k):
                    ?>
                    <tr>
                        <td><?= $no;?></td>
                        <td><?= $k['id_kategori'];?></td>
                        <td><?= $k['jenis_kategori'];?></td>
                        <td>
                            <a href="<?= base_url();?>kelola/editkategori/<?= $k['id_kategori'];?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="<?= base_url();?>kelola/hapuskategori/<?= $k['id_kategori'];?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                        <?php $no++; endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>