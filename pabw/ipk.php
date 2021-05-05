<h2>Input Nilai</h2>
<?php include "koneksi.php"; ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Semester</th>
			<th>IPK</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $smt =1 ?>
		<?php $ambil= $conn->query("SELECT * FROM ipk"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $smt; ?></td>
			<td><?php echo $pecah['ipk']; ?></td>
			<td>
				<a href="menu.php?halaman=hapus&id=<?php echo $pecah['semester']; ?> " class="btn-danger btn">Hapus</a>
				<a href=""class="btn btn-warning">Edit</a>
			</td>
		</tr>
		<?php $smt++; ?>
	<?php } ?>
	</tbody>
</table>
<a href="menu.php?halaman=tambah"class="btn btn-primary">Add</a>