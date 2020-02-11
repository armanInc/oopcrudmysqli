<?php
    include ('koneksi.php');
   $db = new database();
   $data_identitas = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="input.php">Input Data</a>
<table border="3">
        <tr>
           <th>No</th>
           <th>Nama</th>
           <th>Alamat</th>
           <th>Usia</th>
           <th>Opsi</th>
        </tr>
<?php

     
   $no = 1;
foreach ($data_identitas as $row){
        ?>
        <tr>
         <td><?php echo $no++; ?></td>
        <td><?php echo $row['nama']; ?></td>
         <td><?php echo $row['alamat']; ?></td>
         <td><?php echo $row['usia']; ?></td>
         <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">Update</a>
    <a href="proses.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
            
         </td>
        </tr>
    <?php
        }
    ?>
    </table>
    </body>
</html>
        