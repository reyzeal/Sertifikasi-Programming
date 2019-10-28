<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container p-3">
    <a class="btn btn-success" href="index.php?action=form-tambah">Tambah</a>
    <form class="float-right form-inline" action="index.php">
        <input name='cari' class="form-control" value='<?=isset($_GET['cari'])?$_GET['cari']:''?>'>
        <button class="btn btn-secondary">Cari</button>
        <a class="btn btn-primary" href="index.php">Reset</a>
    </form>
    <table class="table" border=1>
        <tr>
            <td>Kode Produk</td>
            <td>Nama Produk</td>
            <td>Jumlah</td>
            <td>Harga</td>
            <td>Aksi</td>
        </tr>
        <?php
        foreach($alldata as $d){ ?>
            <tr>
                <td><?=$d->kode_produk?></td>
                <td><?=$d->nama_produk?></td>
                <td><?=$d->jumlah?></td>
                <td><?=$d->harga;?></td>
                <td>
                    <a class="btn btn-warning" href="index.php?action=form-edit&kode_produk=<?=$d->kode_produk;?>">Edit</a>
                    <a class="btn btn-danger" href="index.php?action=delete&kode_produk=<?=$d->kode_produk;?>">Delete</a>
                </td>
            </tr>
        <?php };
        if(!$alldata) echo "<tr style='text-align:center'><td colspan='5'>Saat ini kosong</td></tr>";
        ?>
    </table>
</div>
</body>
</html>