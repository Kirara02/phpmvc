<div class="container mt-5">
<div class="row">
    <div class="col-lg-6">
        <?= Flasher::flash(); ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-6">
        <form action="<?= BASEURL ?>/waifu/cari" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="cari waifu" name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-outline-primary" type="submit" id="cari">Cari</button>
            </div>
        </form>
    </div>
</div>
<div class="row">
        <div class="col-6"> 
            <h3>Daftar Waifu</h3>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Waifu
                </button>
            </div>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama'] ?>
                    <a href="<?= BASEURL ?>/waifu/detail/<?= $mhs['id']?>" class="badge bg-primary float-end mx-2">detail</a>
                    <a href="<?= BASEURL ?>/waifu/edit/<?= $mhs["id"] ?>" class="badge bg-success float-end mx-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs["id"] ?>">Edit</a>           
                    <a href="<?= BASEURL ?>/waifu/hapus/<?= $mhs['id']?>" class="badge bg-danger float-end mx-2" 
                    onclick="return confirm('yakin?')">hapus</a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title formModalLabel" id="formModalLabel">Tambah data Waifu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="<?= BASEURL ?>/waifu/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="anime">Anime</label>
                    <input type="text" name="anime" id="anime" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group w-50">
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" id="umur" class="form-control">
                </div>
                <div class="form-group w-50">
                    <label for="status">Status</label>
                    <input type="text" name="status" id="status" class="form-control">
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah data</button>
                </div>  
            </form>
        </div>
    </div>
</div>

