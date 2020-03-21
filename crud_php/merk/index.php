<?php
include_once("./config.php");
$result = mysqli_query($mysqli, "SELECT * FROM brand ORDER BY id DESC");
?>
<html>
<head>    
    <title>DATA MOBIL</title>
</head>

<body>
    <a href="/crud_php/index.php">KEMBALI</a><br>
    <a href="add.php">Tambah Data Mobil</a>
    <table width='80%' border=1>
    <tr>
        <th>No</th> <th>Merk</th> <th>UPDATE</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['id']."</td>";
        echo "<td>".$data['name']."</td>";  
        echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a> | <a href='/crud_php/mobil/index.php?id=$data[id]'>Tambah Type Mobil</a></td></tr><br>";        
    }
    ?>
    </table>
</body>
</html>