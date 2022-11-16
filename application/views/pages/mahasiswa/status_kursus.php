<div id="jadwal-kursus" class="container py-5">
    <h2 class="mb-4" style="font-size: 1.3rem;font-weight:bold">
        Status Pendaftaran
    </h2>


    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Permintaan</th>
                <th scope="col">Nama</th>
                <th scope="col">Nama Kursus</th>
                <th scope="col">Kelas</th>
                <th scope="col">NPM</th>
                <th scope="col">KRS</th>

                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
        <?php // print_r($data_pendaftaran->getResultArray()) ?>
            <?php $i=1; 
            foreach ($daftar as $key => $value) { ?>
                <tr>
                    <td scope="row"><?= $i++ ?></td>
                    <td scope="row"><?= $value->tanggal_permintaan ?></td>
                    <td scope="row"><?= $value->nama ?></td>
                    <td scope="row"><?= $value->nama_kursus ?></td>
                    <td scope="row"><?= $value->kelas ?></td>
                    <td scope="row"><?= $value->npm ?></td>
                    <td scope="row"><?= $value->krs ?></td>
                    <td scope="row"><?= $value->status ?></td>
                    <!-- <td scope="row">
                    <a target="_blank" href="<?=base_url('uploads/pdf/'.$value->krs)?>" class="btn btn-primary">Lihat KRS</a>
                    <a href="" class="btn btn-primary">Setujui</a>
                    </td> -->
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