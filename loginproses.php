
<?php 

require_once("db.php");
$nama		= $_POST['nama'];
		$nim		= $_POST['nim'];
		$jeniskelamin	= $_POST['jeniskelamin'];
		$program= $_POST['program'];
		$fakultas	= $_POST['fakultas'];
		$asal		= $_POST['asal'];
		$moto		= $_POST['moto'];
$moto=" ";	
		$err = $erNama = $erNim = $erUser = $erPass = '';

		if (empty($nama) || empty($nim) || empty($username) || empty($pass)) { $err = 'Isi Data Terlebih Dahulu'; }

		if (empty($nama)) { $erNama = 'Nama Tidak Boleh Kosong'; }

		if (empty($nim)) { $erNim = 'NIM Tidak Boleh Kosong'; }

		if (empty($username)) { $erUser = 'Username Tidak Boleh Kosong'; }

		if (empty($pass)) { $erPass = 'Password Tidak Boleh Kosong'; }

		if (empty($err)) { 
			$sql = "INSERT INTO datamahasiswa (nama, nim, jenisKel, fakultas, program,asal,moto, username, pass) VALUES ('$nama','$nim','$jeniskelamin','$fakultas','$program','$asal'.'$moto')";
			$query = mysqli_query($conn, $sql);

			if ($query) {
				echo "* Data Berhasil Disimpan";
					}else{
				echo "<span class='red'>* Data Gagal Disimpan. Pastikan NIM tidak pernah didaftarkan".mysqli_connect_error()."</span>";
			}
		
	}
	echo "<center> New record created successfully </center>";

	echo "Error: ". $sql . "<br>" . mysqli_error($conn);

mysqli_close($conn);
echo"<br>";
echo "<center> Silahkan klik <a href='tampilan.php'>link ini</a> untuk selanjutnya </center>";

?>
