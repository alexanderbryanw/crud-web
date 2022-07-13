<?php
//1. Connect DB
$pdo = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");

//2. SQL
$sql = "DELETE FROM produk36371 WHERE id36371 = ?";

//3. Prepare & Execute
$hasil = $pdo->prepare($sql);
$hasil->execute([$_GET['id36371']]);  
echo "Data berhasil dihapus";
header("Location: produk_list.php");