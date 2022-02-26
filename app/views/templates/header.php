<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASEURL ?>/css/bootstrap.css" rel="stylesheet" >
    <title>Halaman <?= $data['judul']?></title>
</head>
<body>
<div class="container">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/home">PHP MVC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL ?>/home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL ?>/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
        </li>
    </ul>
</div>