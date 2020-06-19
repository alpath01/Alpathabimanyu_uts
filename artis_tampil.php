<h2>DATA ARTIS
	<a href="dashboard.php?page=artis_input" class="btn">Tambah</a>
</h2>

<?php 
include "app/Controller.php";
include "app/Artist.php";

$art = new App\Artist();
$rows = $art->tampil();

?>

<table>
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>EDIT</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['artist_id']; ?></td>
			<td><?php echo $row['artist_name']; ?></td>
			<td><a href="dashboard.php?page=artis_edit&id=<?php echo $row['artist_id']; ?>" class="btn">Edit</a></td>
		</tr>
	<?php } ?>
</table>