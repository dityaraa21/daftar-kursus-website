
<div id="jadwal-kursus"  class="container py-5 text-center" style="max-width: 300px;">
    <h2 class="mb-4" style="font-size: 1.3rem;font-weight:bold">
        Upload KRS (aktif) untuk melanjutkan pendaftaran.
    </h2>
    <?php echo form_open_multipart('daftarkursus/postdata') ?>

    <input type="hidden" class="form-control" name="jadwal" value="<?=$this->uri->segment(3)?>" >

    <input type="text" class="form-control" value="Nama Kursus : <?= $daftar->nama_kursus ?>" disabled>
    <input type="text" class="form-control mt-2"  value="Waktu : <?= $daftar->mulai ?> - <?= $daftar->selesai ?>"disabled>
    <input class="form-control mt-2" type="file" name="krs" required>
    <button type="submit" class="btn btn-primary w-100 mt-3">Daftar</button>
   
    <?php form_close();?>
 
<!-- <?php var_dump($this->session->userdata('id'))?> -->
</div>