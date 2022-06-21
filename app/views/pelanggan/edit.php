
<div class="container">

<h3>Edit Data Pelanggan</h3>
<form action="<?php echo URL; ?>/pelanggan/update" method="POST">
	<input type="hidden" name="pel_id" value="<?php echo $data['row']['pel_id']; ?>">
<div class="mb-3">
<label>Id Golonagan</label>
<input type="text" class="form-control" name="pel_id_gol" value="<?php echo $data['row']['pel_id_gol']; ?>">
</div>
<div class="mb-3">
<label>No Pelanggan</label>
<input type="text" class="form-control" name="pel_no" value="<?php echo $data['row']['pel_no']; ?>">
</div>
<div class="mb-3">
<label>Nama Pelanggan</label>
<input type="text" class="form-control" name="pel_nama" value="<?php echo $data['row']['pel_nama']; ?>">
</div>
<div class="mb-3">
<label>Alamat Pelanggan</label>
<input type="text" class="form-control" name="pel_alamat" value="<?php echo $data['row']['pel_alamat']; ?>">
</div>
<div class="mb-3">
<label>No HP Pelanggan</label>
<input type="text" class="form-control" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>">
</div>
<div class="mb-3">
<label>NIK Pelanggan</label>
<input type="text" class="form-control" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>">
</div>
<div class="mb-3">
<label>Seri Pelanggan</label>
<input type="text" class="form-control" name="pel_seri" value="<?php echo $data['row']['pel_seri']; ?>">
</div>
<div class="mb-3">
<label>Meteran Pelanggan</label>
<input type="text" class="form-control" name="pel_meteran" value="<?php echo $data['row']['pel_meteran']; ?>">
</div>
<label>Status Pelanggan</label>
<input type="text" class="form-control" name="pel_aktif" value="<?php echo $data['row']['pel_aktif']; ?>">
</div>
<div class="mb-3">
<label>ID User</label>
<input type="text" class="form-control" name="pel_id_user" value="<?php echo $data['row']['pel_id_user']; ?>">
</div>

<button type="submit" class="btn btn-primary"name="btn_update">Update</button>

</form>
</div>
