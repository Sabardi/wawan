<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "oop";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	// clas tampil data
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from user");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	// Clas proses data
	function input($nama,$alamat,$usia){
		mysqli_query($this->koneksi,"insert into user values ('','$nama','$alamat','$usia')");
	}

	// edit data 
	function edit($id){
		$data = mysqli_query($this->koneksi,"select * from user where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	// proses update data nya
	function update($id,$nama,$alamat,$usia){
		mysqli_query($this->koneksi,"update user set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
	}

	// proses hapus data 
	function hapus($id){
		mysqli_query($this->koneksi,"delete from user where id='$id'");
	}
}


?>