<html>
<head>
    <title>DATA MOBIL | TAMBAH</title>
</head>

<body>
    <a href="index.php">Kembali</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="name" placeholder='TOYOTA'></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $merk = $_POST['name'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO brand(name) VALUES('$merk')");
        echo "BERHASIL!. <a href='index.php'>Lihat Data</a>";
    }
    ?>
</body>
</html>