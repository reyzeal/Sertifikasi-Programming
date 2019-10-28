<?php
    require('model/produk.php');
    // index.php?cari=...
    if(isset($_GET['cari']))
        $alldata = cari();
    else
        $alldata = semua();

    // index.php
    if(!isset($_GET['action']))
        include('view/home.php');
    // index.php?action=...
    else{
        $form = $_GET['action'];
        switch ($form){
            case 'form-tambah': // index.php?action=tambah
                include('view/insert.php');
                break;
            case 'form-edit': // index.php?action=edit
                // nyiapin variabel yang dibutuhkan di view/edit.php
                // cek dulu apa aja
                $kode_produk = $_GET['kode_produk'];
                $data = satu($kode_produk);
                $nama_produk = $data->nama_produk;
                $jumlah = $data->jumlah;
                $harga = $data->harga;
                require('view/edit.php');
                break;
            case 'tambah': // index.php?action=tambah
                insert();
                header('Location: index.php');
                break;
            case 'edit': // index.php?action=edit
                edit();
                header('Location: index.php');
                break;
            case 'delete': // index.php?action=delete
                delete();
                header('Location: index.php');
                break;
        }
    }
?>