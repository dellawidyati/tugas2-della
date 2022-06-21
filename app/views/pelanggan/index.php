      
 <a class="btn btn-primary btn-sm float-end" href="<?php echo URL; ?>/pelanggan/input">Tambah Data</a><pre></pre>
<h3>Pelanggan</h3>
     
<table class="table">
      <thead class="table-dark">
            <th>NO</th>
            <th>ID</th>
            <th>NO PEL</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>NIK</th>
            <th>SERI</th>
            <th>METERAN</th>
            <th>STATUS</th>
            <th>ID USER</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </thead>
      <tbody>
      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['pel_id']; ?></td>
                  <td><?php echo $row['pel_id_gol']; ?></td>
                  <td><?php echo $row['pel_no']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_alamat']; ?></td>
                  <td><?php echo $row['pel_hp']; ?></td>
                  <td><?php echo $row['pel_ktp']; ?></td>
                  <td><?php echo $row['pel_seri']; ?></td>
                  <td><?php echo $row['pel_meteran']; ?></td>
                  <td><?php echo $row['pel_aktif']; ?></td>
                  <td><?php echo $row['pel_id_user']; ?></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn btn-warning btn-sm" >Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn btn-danger btn-sm" >Delete</a></td>
            </tr>
      <?php } ?>
</tbody>
</table>



