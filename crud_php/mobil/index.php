<html>
<head>
    <title>DATA MOBIL | TAMBAH</title>
</head>

<body>
    <a href="/crud_php/index.php">Kembali</a>
    <br/><br/>

    <form action="" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="merk" placeholder='BMW'></td>
            </tr>
            <tr> 
                <td>Type</td>
                <td><input type="text" name="name" placeholder='320i'></td>
            </tr>
            <tr>
                <td>Link Gambar</td>
                <td><input type="text" name="link" placeholder="https://static.carmudi.co.id/weNjucwGkNKWOHjXSmx66TkZd00=/900x405/https://www.trenotomotif.com/ncs/images/BMW/Series%203%20sedan/Series%203%20depan%202.jpg"></td>
            </tr>
                <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $id = $_GET['id'];
        $type = $_POST['name'];
        $link = $_POST['link'];
        $merk = $_POST['merk'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO cars(name,brand_id,image) VALUES('$type','$merk','$link')");
        echo "BERHASIL! <a href='/crud_php/index.php'>LIHAT DATA</a>";
    }
    ?>
</body>
</html>