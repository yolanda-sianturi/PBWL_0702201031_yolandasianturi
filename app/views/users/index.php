<h2>User</h2>

<a href="<?php echo URL; ?>/users/input" class="btn">Input User</a>

<table>
      <tr>
            <th>NO</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>POS</th>
            <th>STATUS</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_password']; ?></td>
                  <td><?php echo $row['user_nama']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td><?php echo $row['user_hp']; ?></td>
                  <td><?php echo $row['user_pos']; ?></td>
                  <td><?php echo $row['user_aktif']; ?></td>
                  <td><a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btn" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')">Delete</a></td>
            </tr>
      <?php } ?>

</table>