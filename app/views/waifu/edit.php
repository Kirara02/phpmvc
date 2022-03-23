<div class="container w-75 mt-3 mb-4">
<form action="<?= BASEURL ?>/waifu/edit" method="post">
    <div class="form-group">
        <label for="anime">Anime</label>
        <input type="text" name="anime" id="anime" class="form-control" value="<?=$data['mhs']['anime']?>">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?=$data['mhs']['nama']?>">
    </div>
    <div class="form-group w-50">
        <label for="umur">Umur</label>
        <input type="number" name="umur" id="umur" class="form-control" value="<?=$data['mhs']['umur']?>">
    </div>
    <div class="form-group w-50">
        <label for="status">Status</label>
        <input type="text" name="status" id="status" class="form-control" value="<?=$data['mhs']['status']?>">
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
<a href="<?= BASEURL ?>/waifu" class="mt-2">Kembali</a>