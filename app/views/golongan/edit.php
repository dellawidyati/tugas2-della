
<div class="container">

<h3>Edit Data Golongan</h3>
<form action="<?php echo URL; ?>/golongan/update" method="POST">
	<input type="hidden" name="gol_id" value="<?php echo $data['row']['gol_id']; ?>">
<div class="mb-3">
<label>Kode Golongan</label>
<input type="text" class="form-control" name="gol_kode" value="<?php echo $data['row']['gol_kode']; ?>">
</div>
<div class="mb-3">
<label>Golongan</label>
<input type="text" class="form-control" name="gol_nama" value="<?php echo $data['row']['gol_nama']; ?>">
</div>

<button type="submit" class="btn btn-primary"name="btn_update">Update</button>

</form>
</div>
