      
 <a class="btn btn-primary btn-sm float-end" href="<?php echo URL; ?>/golongan/input">Tambah Data</a><pre></pre>
<h3>Golongan</h3>
     
<table class="table">
      <thead class="table-dark">
            <th>NO</th>
            <th>KODE</th>
            <th>GOLONGAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </thead>
      <tbody>
      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['gol_id']; ?></td>
                  <td><?php echo $row['gol_kode']; ?></td>
                  <td><?php echo $row['gol_nama']; ?></td>
                  <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn btn-warning btn-sm" >Edit</a></td>
                  <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btn btn-danger btn-sm" >Delete</a></td>
            </tr>
      <?php } ?>
</tbody>
</table



