<?php
//1. Connect DB
$pdo = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");

//2. SQL
$sql = "SELECT * FROM produk36371 WHERE id36371 = ?";

//3. Prepare & Execute
$hasil = $pdo->prepare($sql);
$hasil->execute([$_GET['id36371']]);

//4. Output
$data = $hasil->fetch();
?>
<u>Edit Produk</u>
<br /><br />

<form action="edit_proses.php" method="post">
    Nama &emsp;&emsp;&emsp;
    <input type="text" name="nama" value="<?= $data['nama36371']; ?>"/> <br /> <br />
    Model&emsp;&emsp;&emsp;
    <input type="text" name="model" value="<?= $data['model36371']; ?>" /> <br /> <br />
    Harga Beli&emsp;&nbsp;
    <input type="text" name="hrg_beli" value="<?= $data['harga_beli36371']; ?>"/> <br /> <br />
    Harga Jual&emsp;&nbsp;
    <input type="text" name="hrg_jual" value="<?= $data['harga_jual36371']; ?>"/> <br /> <br />
    Stok &emsp;&emsp;&emsp;&nbsp;&nbsp;
    <input type="text" name="stok" value="<?= $data['stok36371']; ?>"/> <br /> <br />
    <input type="hidden" name="id" value="<?= $data['id36371']; ?>">
    &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<button type="submit"> Simpan </button>
</form>