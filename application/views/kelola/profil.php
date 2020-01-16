<div class="card mt-4">
    <div class="card-header">
        <h2>Profil Petugas</h2>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-header">Alamat</div>
                    <div class="card-body">
                        <p class="card-text"><?= $profil['alamat'];?></p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Kontak</div>
                    <div class="card-body">
                        <p class="card-text"><?= $profil['kontak'];?></p>
                    </div>
                </div>
            </p>
            <footer class="blockquote-footer"><?= $profil['nama_petugas'];?></footer>
        </blockquote>
    </div>
</div>