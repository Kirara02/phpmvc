<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nama : <?= $data['mhs']['nama']?></h5>
            <p class="card-text">Umur : <?= $data['mhs']['umur']?></p>
            <p class="card-text">Anime : <?= $data['mhs']['anime']?></p>
            <p class="card-text">Status : <?= $data['mhs']['status']?></p>
            <a href="<?= BASEURL?>/waifu" class="card-link">Kembali</a>
        </div>
    </div>
</div>