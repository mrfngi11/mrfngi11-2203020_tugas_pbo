<h2>Negara</h2>

<a href="<?php echo URL; ?>/negara/input" class="btn">Input Negara</a>

<table>
      <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>CAPITAL</th>
            <th>PRESIDEN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;    
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['negara_kode']; ?></td>
                  <td><?php echo $row['negara_nama']; ?></td>
                  <td><?php echo $row['negara_capital']; ?></td>
                  <td><?php echo $row['negara_presiden']; ?></td>
                  <td><a href="<?php echo URL; ?>/negara/edit/<?php echo $row['negara_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/negara/delete/<?php echo $row['negara_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>