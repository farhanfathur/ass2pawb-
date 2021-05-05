<?php include "koneksi.php"; ?>
<h2>Tambah Produk</h2>
<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>IPK</label>
		<input type="text" class="form-control" name="ipk">
	</div>
	<button type="submit" class="btn btn-primary" name="save">Save</button>

</form>
<?php 
if(isset($_POST['save'])){
	$conn->query("INSERT INTO ipk 
		(ipk)
		VALUES('$_POST[ipk]')");

echo "<meta http-equiv ='refresh' content='1;url=menu.php?halaman=ipk'>";
echo "<div class='alert alert-info'>Data tersimpan</div>";
} ?>
