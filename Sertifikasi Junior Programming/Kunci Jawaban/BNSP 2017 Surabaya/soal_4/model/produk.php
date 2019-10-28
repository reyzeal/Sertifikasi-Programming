<?php
/**
 * Mengambil seluruh data produk
 * @return array
 */
function semua(){
    $connection = new mysqli('localhost','root','','Uji');
    $q = $connection->query("SELECT * FROM Produk");
    $hasil = [];
    while($row = $q->fetch_object()){
        $hasil[] = $row;
    }
    return $hasil;
}
/**
 * Pencarian produk berdasarkan kecocokan nama produk maupun kode produk dengan keyword tertentu
 * Jika tidak terdapat keyword, maka hasilnya semua produk
 * @return Array of Associative Array dari rownya
 */
function cari(){
    $keyword = isset($_GET['cari'])?$_GET['cari']:'';
    $connection = new mysqli('localhost','root','','Uji');
    $q = $connection->query("SELECT * FROM Produk 
			WHERE kode_produk LIKE '%$keyword%' or 
			nama_produk LIKE '%$keyword%'");

    $hasil = [];
    while($row = $q->fetch_object()){
        $hasil[] = $row;
    }
    return $hasil;
}
/**
 * Insert produk
 */
function insert(){
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $connection = new mysqli('localhost','root','','Uji');
    $connection -> query("INSERT INTO Produk VALUES
		('$kode_produk','$nama_produk','$jumlah','$harga')");
}
/**
 * Edit produk berdasarkan kode produk yang diberikan
 */
function edit(){
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $connection = new mysqli('localhost','root','','Uji');
    $connection->query("UPDATE Produk SET 
		nama_produk='$nama_produk', jumlah=$jumlah, 
		harga=$harga WHERE kode_produk='$kode_produk'");
}
/**
 * Delete produk berdasarkan kode produk yang diberikan
 */
function delete(){
    $kode_produk = $_GET['kode_produk'];
    $connection = new mysqli('localhost','root','','Uji');
    $connection->query("DELETE FROM Produk 
		WHERE kode_produk ='$kode_produk'");
}

/**
 * Ambil satu produk saja berdasarkan kode produknya, dipake buat edit
 * @return object
 */
function satu($kode_produk){
    $connection = new mysqli('localhost','root','','Uji');
    $result = $connection->query("SELECT * FROM Produk WHERE kode_produk='$kode_produk'");
    return $result->fetch_object();
}
?>
