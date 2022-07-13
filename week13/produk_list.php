<?php
//1. Connect DB
$pdo = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");

//2. SQL
$sql = "SELECT * FROM produk36371";

//3. Prepare & Execute
$hasil = $pdo->query($sql);

//4. Output
?>

<style>
    table, th, td{
        margin: 25px 0px;
        min-width: 100px;
        border: 1px solid black;
        border-collapse: collapse;
    }

    .nomor{
        text-align: center;
    }

    a:link, a:visited{
        background-color: white;
        color: black;
        padding: 5px 10px;
        margin: 5px;
        text-align: center;
        border: 1px solid black;
        display: inline-block;
    }

    a:hover, a:active{
        background-color: black;
        color: white;
    }
</style>

<u>Daftar Produk</u>
<table>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Harga Jual</th>
        <th>Stok</th>
        <th>Tindakan</th>
    </tr>
    <?php
        $i = 0;
        while($row=$hasil->fetch()):
            $i++;
    ?>
    <tr>
        <td class="nomor"><?= $i; ?></td>
        <td><?= $row['nama36371']; ?></td>
        <td><?= $row['harga_jual36371']; ?></td>
        <td><?= $row['stok36371']; ?></td>
        <td>
            <a href="form_edit.php?id36371=<?= $row['id36371']; ?>">Edit</a>
            <a href="delete.php?id36371=<?= $row['id36371']; ?>">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>