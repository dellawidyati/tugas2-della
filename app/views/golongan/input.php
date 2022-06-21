
<div class="container">

<h3>Tambah Data Golongan</h3>
<form action="<?php echo URL; ?>/golongan/store" method="POST">
<div class="mb-3">
<label>Kode Golongan</label>
<input type="text" class="form-control" name="gol_kode">
</div>
<div class="mb-3">
<label>Golongan</label>
<input type="text" class="form-control" name="gol_nama">
</div>

<button type="submit" class="btn btn-primary"name="btn_simpan">Submit</button>

</form>
</div>
