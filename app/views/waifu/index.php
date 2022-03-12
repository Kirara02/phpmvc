<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Waifu</h3>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="waifu/input"><button class="btn btn-primary mb-2" type="button">Tambah Data
                        Waifu</button></a>
            </div>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                <li class="list-group-item  d-flex justify-content-between align-items-center">
                    <?= $mhs['nama'] ?>
                    <a href="<?= BASEURL ?>/waifu/detail/<?= $mhs['id']?>" class="badge bg-primary">detail</a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>