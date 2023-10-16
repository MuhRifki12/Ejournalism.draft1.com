<?php 

function koneksiDB() {
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "tb_tutorial";

    $conn = mysqli_connect($host, $username, $password, $db);
    
    if(!$conn) {
        die("Koneksi Database Gagal : " .mysqli_connect_error());
    } else {
        return $conn;
    }
}

function selectAllData() {
    $query = "SELECT * FROM tb_buku";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO tb_buku VALUES ('".$data['kode_jurnal']. "','" . $data['nama_jurnal']. "','" . $data['title']. "','" . $data['size']. "','" . $data['ekstensi']. "','" . $data['berkas']. "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {    
        return 1;
    }
}
 ?>