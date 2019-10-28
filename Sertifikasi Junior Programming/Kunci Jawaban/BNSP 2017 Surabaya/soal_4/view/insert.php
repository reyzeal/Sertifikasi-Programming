<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
		<form action="index.php?action=tambah" method="post" class="w-50 p-3">
			<a class="btn btn-info" href="index.php">Back</a>
			<p class="display-4">Tambah Data</p>
			<input name="kode_produk" class="form-control" placeholder="kode produk">
			<input name="nama_produk" class="form-control" placeholder="nama produk">
			<input name="jumlah" class="form-control" placeholder="jumlah">
			<input name="harga" class="form-control" placeholder="harga">
			<button class="btn btn-success" name='simpan'>Simpan</button>
			<button type="reset" class="btn btn-primary">Reset</button>
		</form>
	</body>
</html>
