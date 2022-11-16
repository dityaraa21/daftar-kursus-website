<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

</style>
</head>
<nav style="background:#222222" class="bg-dark text-white">
    <div class="container d-flex align-items-center gap-4" style="height:60px">
        <div id="navLogo" class="flex-grow-1">
            Universitas <b>Jewepe</b>
        </div>

        <div class="d-flex gap-4 align-items-center">
            <a href="<?= base_url('admin/datakursus') ?>" class="">Data Kursus</a>
            <a href="<?= base_url('admin/datajadwal') ?>" class="">Data Jadwal Kursus</a>
            <a href="<?= base_url('admin/datapendaftaran') ?>" class="">Data Pendaftaran Peserta</a>
            <a href="<?= base_url('admin/datamahasiswa') ?>" class="">Data Mahasiswa</a>
            <a href="<?= base_url('auth/logout') ?>" class="btn btn-outline-light">Logout</a>
        </div>

    
    </div>
</nav>

<style>
    nav a {
        color:white;
        text-decoration: none;
    }
    a:hover {color: #446EC9;}
</style>