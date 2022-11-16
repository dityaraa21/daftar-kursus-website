<div id="banner" class="bg-dark position-relative" style="background: url('https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80'); background-size:cover">
    <div style="background-color: #00000075; height:100%;width:100%; position:absolute"></div>
    <div class=" position-relative container text-white d-flex flex-column justify-content-center gap-4" style=" height:400px;">
        <div style="max-width: 600px;">
            <h2>
                Website <b>Pendaftaran Kursus</b>
            </h2>
            <p>
                Lembaga kursus yang berada di bawah naungan Lembaga Pengembangan Universitas Jewepe untuk memfasilitasi kursus bagi mahasiswa.
            </p>
        </div>

        <div>
            <a href="#jadwal-kursus" class="btn btn-outline-light">Lihat Jadwal</a>
        </div>
    </div>
</div>

<!-- Jadwal Kursus Tersedia -->
<div id="jadwal-kursus" class="container py-5 pb-2">
    <h2 class="mb-4" style="font-size: 1.3rem;font-weight:bold">
        Kursus Tersedia
    </h2>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kursus</th>
                <!-- <th scope="col">Keterangan</th> -->
                <th scope="col">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($kursus as $key => $value) { ?>
                <td scope="row"><?= $i++ ?></td>
                <td scope="row"><?= $value->nama_kursus ?></td>
                <!-- <td scope="row"><?= $value->lama_kursus ?></td> -->
                <td scope="row"><?= $value->mulai ?> - <?= $value->selesai ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php if ($this->session->userdata('role_id') != '2') { ?>
    <div class="alert alert-warning" role="alert">

        Silahkan login untuk mendaftar.

    </div>
    <?php } ?>
</div>

<!-- Materi Kursus -->
<div id="jadwal-kursus" class="container py-5 pt-2">
    <h2 class="mb-4" style="font-size: 1.3rem;font-weight:bold">
        Materi Kursus
    </h2>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kursus</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($materi as $key => $value) { ?>
                <tr>
                    <td scope="row"><?= $i++ ?></td>
                    <td scope="row"><?= $value->nama_kursus ?></td>
                    <!-- <td scope="row"><?= $data['lama_kursus'] ?></td> -->
                    <td scope="row"><?= $value->keterangan_kursus ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>