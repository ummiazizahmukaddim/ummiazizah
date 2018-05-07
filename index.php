<center><table border="2">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Aksi</th>
	</tr>
<?php 
	include 'koneksi.php';
	$sql = "SELECT *FROM mahasiswa";
	$result = $conn->query($sql);

	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>" . $row["nim"];
			echo "</td><td>" . $row["nama"];
			echo "</td><td>" . $row["jurusan"];
			echo "</td><td><a href='edit.php?edit=" .$row["nim"] . "'>edit</a></td></tr>";

		}
	}
else
{
	echo "0 results";
}
$conn->close();

?>
</table></center>