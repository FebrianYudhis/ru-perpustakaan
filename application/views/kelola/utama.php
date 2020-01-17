<div class="main-content-inner">
    <div class="container">
    <?php echo $this->session->flashdata('pesan');?>
        <div class="row">
            <div class="card mt-4 mx-auto">
                <div class="card-body">
                    <div class="d-md-flex">
                        <div class="nav flex-column nav-pills mr-4 mb-3 mb-sm-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-mahasiswa-tab" data-toggle="pill" href="#v-pills-mahasiswa" role="tab" aria-controls="v-pills-mahasiswa" aria-selected="true">Mahasiswa</a>
                            <a class="nav-link" id="v-pills-kategori-tab" data-toggle="pill" href="#v-pills-kategori" role="tab" aria-controls="v-pills-kategori" aria-selected="false">Kategori</a>
                            <a class="nav-link" id="v-pills-buku-tab" data-toggle="pill" href="#v-pills-buku" role="tab" aria-controls="v-pills-buku" aria-selected="false">Buku</a>
                            <a class="nav-link" id="v-pills-peminjaman-tab" data-toggle="pill" href="#v-pills-peminjaman" role="tab" aria-controls="v-pills-peminjaman" aria-selected="false">Peminjaman</a>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-mahasiswa" role="tabpanel" aria-labelledby="v-pills-mahasiswa-tab">
                                <div class="card text-white bg-dark mb-3" style="min-width: 80vw;">
                                    <div class="card-header">Data Mahasiswa</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Mahasiswa Yang Terdaftar</h5>
                                        <p class="card-text text-white"><?= $mahasiswa; ?> Orang</p>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane fade" id="v-pills-kategori" role="tabpanel" aria-labelledby="v-pills-kategori-tab">
                                <div class="card text-white bg-dark mb-3" style="min-width: 80vw;">
                                    <div class="card-header">Data Kategori</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Kategori Yang Tersedia</h5>
                                        <p class="card-text text-white"><?= $kategori; ?> Kategori</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-buku" role="tabpanel" aria-labelledby="v-pills-buku-tab">
                                <div class="card text-white bg-dark mb-3" style="min-width: 80vw;">
                                    <div class="card-header">Data Buku</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Buku Yang Tersedia</h5>
                                        <p class="card-text text-white"><?= $buku;?> Buku</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-peminjaman" role="tabpanel" aria-labelledby="v-pills-peminjaman-tab">
                                <div class="card text-white bg-dark mb-3" style="min-width: 80vw;">
                                    <div class="card-header">Data Peminjaman</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Buku Yang Dipinjam</h5>
                                        <p class="card-text text-white"><?= $pinjaman;?> Buku</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="clock" class="mt-4"></div>
        </div>
    </div>
</div>
