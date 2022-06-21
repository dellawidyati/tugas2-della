
<div class="container">

<h3>Tambah Data Pelanggan</h3>
<form action="<?php echo URL; ?>/pelanggan/store" method="POST">
<div class="mb-3">
<label>ID Golongan</label>
<input type="text" class="form-control" name="pel_id_gol">
</div>
<div class="mb-3">
<label>No Pelanggan</label>
<input type="text" class="form-control" name="pel_no">
</div>
<div class="mb-3">
<label>Nama Pelanggan</label>
<input type="text" class="form-control" name="pel_nama">
</div>
<div class="mb-3">
<label>Alamat Pelanggan</label>
<input type="text" class="form-control" name="pel_alamat">
</div>
<div class="mb-3">
<label>No HP Pelanggan</label>
<input type="text" class="form-control" name="pel_hp">
</div>
<div class="mb-3">
<label>NIK Pelanggan</label>
<input type="text" class="form-control" name="pel_ktp">
</div>
<div class="mb-3">
<label>Seri Pelanggan</label>
<input type="text" class="form-control" name="pel_seri">
</div>
<div class="mb-3">
<label>Meteran Pelanggan</label>
<input type="text" class="form-control" name="pel_meteran">
</div>
<div class="mb-3">
<label>Status Pelanggan</label>
<input type="text" class="form-control" name="pel_aktif">
</div>
<div class="mb-3">
<label>ID User</label>
<input type="text" class="form-control" name="pel_id_user">
</div>
<button type="submit" class="btn btn-primary"name="btn_simpan">Submit</button>

</form>
</div>
