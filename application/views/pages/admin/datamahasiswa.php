<div id="jadwal-kursus" class="container py-5">
    <div class="d-flex gap-3 align-items-center mb-3">
        <h2 class="" style="font-size: 1.3rem;font-weight:bold">
            Data Mahasiswa
        </h2>

    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">NPM</th>
            </tr>
        </thead>
        <tbody>
            <?php // print_r($data_kursus->getResultArray()) 
            ?>
            <?php $i = 1;
            foreach ($mhs as $key => $value) { ?>
                <tr>
                    <td scope="row"><?= $i++ ?></td>
                    <td scope="row"><?= $value->nama ?></td>
                    <td scope="row"><?= $value->kelas ?></td>
                    <td scope="row"><?= $value->npm ?></td>
                    <td scope="row">

                        <a href="<?=base_url('admin/datamahasiswa/tampil/'.$value->id)?>" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>