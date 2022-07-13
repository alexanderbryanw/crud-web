<?php
//1. Connect DB
$pdo = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");

//2. SQL
$sql = "UPDATE produk36371 
        SET nama36371 = ?, 
            model36371 = ?, 
            harga_beli36371 = ?, 
            harga_jual36371 = ?, 
            stok36371 = ?
        WHERE id36371 = ?";

//3. Prepare & Execute
$hasil = $pdo->prepare($sql);
$data = [
            $_POST['nama'],
            $_POST['model'],
            $_POST['hrg_beli'],
            $_POST['hrg_jual'], 
            $_POST['stok'],
            $_POST['id']
];
$stmt = $hasil->execute($data);
echo "Data berhasil diedit";