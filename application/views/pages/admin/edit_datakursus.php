<div id="jadwal-kursus"  class="container py-5">
    <div class="d-flex gap-3 align-items-center mb-3">
    <h2 class="" style="font-size: 1.3rem;font-weight:bold">
        Tambah Data Kursus
    </h2>
</div>

<div class="container">

<?php echo form_open('admin/datakursus/update/'.$data->id) ?>

<div class="mb-3">
  <label for="kursus" class="form-label">Nama Kursus</label>
  <input name="nama_kursus" type="text" class="form-control" id="kursus" placeholder="Nama Kursus" value="<?=$data->nama_kursus?>">
</div>
<div class="mb-3">
  <label for="ket" class="form-label">Keterangan</label>
  <textarea  class="form-control" name="keterangan_kursus" cols="30" rows="5" ><?=$data->keterangan_kursus?></textarea>
  <!-- <input name="keterangan_kursus" class="form-control"  id="ket" /> -->

</div>

<button type="submit" class="btn btn-primary">Submit</button>


<?php echo form_close()?>

</div>


    


</div>