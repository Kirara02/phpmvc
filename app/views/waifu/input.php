<div class="container w-50 mt-3">
    <form action="<?= BASEURL ?>/waifu/tambah" method="post">
        <div class="mb-3 w-50">
            <label for="exampleInputEmail1" class="form-label">Anime </label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3 w-50">
            <label for="exampleInputPassword1" class="form-label">Nama</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3 w-25">
            <label for="exampleInputPassword1" class="form-label">Umur</label>
            <input type="number" class="form-control">
        </div>
        <div class="mb-3 w-25">
            <label for="exampleInputPassword1" class="form-label">Status</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="<?= BASEURL?>/waifu" class="card-link">Kembali</a>
</div>