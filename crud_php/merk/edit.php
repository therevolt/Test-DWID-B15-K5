<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $no = $_POST['id'];
    $merk=$_POST['merk'];
    $result = mysqli_query($mysqli, "UPDATE brand SET name='$merk' WHERE id=$no");
    header("Location: index.php");
}
?>
<?php
$no = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM brand WHERE id=$no");
while($user_data = mysqli_fetch_array($result))
{
    $merk = $user_data['name'];
}
?>
<html>
<head>  
    <title>DATA MOBIL | EDIT</title>
</head>
<body>
    <a href="index.php">Kembali</a>
    <br/><br/>
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="merk" value=<?php echo $merk;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>