<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if(!is_null($id))
{
	$data_identitas = $db->get_by_id($id);
}
else
{
	header('location:tampil.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Identitas</h3>
<hr/>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_identitas['id'];?>"/>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data_identitas['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" value="<?php echo $data_identitas['alamat'];?>"/></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td>:</td>
		<td><input type="text" name="usia" value="<?php echo $data_identitas['usia']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>