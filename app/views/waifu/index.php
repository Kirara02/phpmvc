<div class="container mt-5">
<div class="row">
    <div class="col-lg-6">
        <?= Flasher::flash(); ?>
    </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Daftar Waifu</h3>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Waifu
                </button>
            </div>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                <li class="list-group-item ">
                    <?= $mhs['nama'] ?>
                    <a href="<?= BASEURL ?>/waifu/detail/<?= $mhs['id']?>" class="badge bg-primary float-right">detail</a>
                    <a href="<?= BASEURL ?>/waifu/edit/<?= $mhs['id']?>" class="badge bg-success float-right">edit</a>
                    <a href="<?= BASEURL ?>/waifu/hapus/<?= $mhs['id']?>" class="badge bg-danger float-right" 
                    onclick="return confirm('yakin?')">hapus</a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Waifu</h5>
        <button type="button" class="btn-close" data-bs-dismiss= "modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL ?>/waifu/tambah" method="post">
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
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</submit>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
    </form>
    </div>
  </div>
</div>