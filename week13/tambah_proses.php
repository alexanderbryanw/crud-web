<?php
//1. Connect DB
$pdo = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");

//2. SQL
$sql = "INSERT INTO produk36371 (nama36371, model36371, harga_beli36371, harga_jual36371, stok36371)
        VALUES (?, ?, ?, ?, ?)";

//3. Prepare & Execute
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST['nama'],
                $_POST['model'],
                $_POST['hrg_beli'],
                $_POST['hrg_jual'],
                $_POST['stok']]);
echo "Data berhasil ditambahkan";