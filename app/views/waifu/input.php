<div class="container w-50 mt-3">
    <form action="<?= BASEURL ?>/waifu/tambah" method="post">
        <div class="mb-3 w-50">
            <label for="exampleInput1" class="form-label">Anime </label>
            <input type="text" name="anime" class="form-control">
        </div>
        <div class="mb-3 w-50">
            <label for="exampleInput1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3 w-25">
            <label for="exampleInput1" class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control">
        </div>
        <div class="mb-3 w-25">
            <label for="exampleInput1" class="form-label">Status</label>
            <input type="text" name="status" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="mt-3">
        <a href="<?= BASEURL?>/waifu" class="card-link">Kembali</a>
    </div>
</div>