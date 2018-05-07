<?php 
	include 'koneksi.php';
	if(isset($_GET['edit']))
	{
		$sql = "SELECT *FROM mahasiswa WHERE id=".$_GET['edit'];
		$result = $conn->query($sql);

		$nim = '';
		$nama = '';
		$jurusan = '';

		if ($result->num_rows > 0 )
		{
			//output data of each row
			while($row = $result -> fetch_assoc())
			{
				$nim = $row["nim"];
				$nama = $row["nama"];
				$jurusan = $row["jurusan"];
			}
		}
?> 
<form method="get" action="">
<input type="hidden" name="id" values="<?=$_GET['edit']?>">
	<table border='1'>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" value="<?=$nim?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?=$nama?>"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<th><input type="text" name="jurusan" value="<?=$jurusan?>"></th>
		</tr>
		<tr>
			<th coolspan='3'><button type="submit">simpan</button></th>
		</tr>
	</table>
</form>

<?php
}
		if(isset($_GET['nim']))
		{
			$sql = "UPDATE mahasiswa set nim='".$_GET['nim']."
			',nama = '".$_GET['nama']."',jurusan='".$_GET['jurusan']
			."' where nim = '". $_GET['nim']."'";
			if ($conn->query($sql)) echo "berhasil mengedit";

		}
		$conn->close();
?>