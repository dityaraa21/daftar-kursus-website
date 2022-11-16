<div id="jadwal-kursus" class="container py-5">
    <div class="d-flex gap-3 align-items-center mb-3">
        <h2 class="" style="font-size: 1.3rem;font-weight:bold">
            Data Kursus
        </h2>
        <a href="<?= base_url('admin/datakursus/tambahkursus') ?>" class="btn btn-primary">
            + Tambah
        </a>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kursus</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php // print_r($data_kursus->getResultArray()) 
            ?>
            <?php $i = 1;
            foreach ($materi as $key => $value) { ?>
                <tr>
                    <td scope="row"><?= $i++ ?></td>
                    <td scope="row"><?= $value->nama_kursus ?></td>
                    <td scope="row"><?= $value->keterangan_kursus ?></td>
                    <td scope="row">

                        <a href="<?=base_url('admin/datakursus/tampil/'.$value->id)?>" class="btn btn-primary">Edit</a>
                        <a href="<?=base_url('admin/datakursus/delete/'.$value->id)?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</div>