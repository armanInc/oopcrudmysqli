<?php 
class database{

var $host = "localhost:3307";
var $username = "root";
var $password = "";
var $database = "belajaroopcrud";

function __construct(){
$this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->database);
if(mysqli_connect_errno()){
   
    echo "Koneksi database gagal:" . mysqli_errno();

     }
}
 function tampil_data(){
    $data = mysqli_query($this->koneksi,"select * from belajar_oop");
    while($row = mysqli_fetch_array($data)){
        $hasil[] = $row;
   
    }
      return $hasil;
 }
    function input($nama,$alamat,$usia)
    {
    $query= mysqli_query($this->koneksi,"insert into belajar_oop values('','$nama','$alamat','$usia')");
  }
    
    	function get_by_id($id)
	{
    $query = mysqli_query($this->koneksi,"select * from belajar_oop where id='$id'");
		return $query->fetch_array();
	}
    
    function update_data($nama,$alamat,$usia,$id)
    {
         $query = mysqli_query ($this->koneksi,"update belajar_oop  set nama='$nama',alamat='$alamat',usia='$usia' where id='$id'"); 
    }

    function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from belajar_oop where id='$id'");
	}
}

?>