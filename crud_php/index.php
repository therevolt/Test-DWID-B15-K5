<?php
include_once("./config.php");
$result = mysqli_query($mysqli, "SELECT * FROM cars ORDER BY id DESC");
?>

<html>
<head>    
    <title>DATA MOBIL</title>
</head>

<body>
<a href="./merk">Lihat Merk Mobil</a><br/><br/>
    <table width='80%' border=1>

    <tr>
        <th>No</th> <th>Merk(Type)</th> <th>Gambar</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['id']."</td>";
        echo "<td>".$data['name']."(".$data['brand_id'].")"."</td>";  
        echo "<td><center><img src=".$data['image']." width='400px' height='200px'></center></td></tr>";        
    }
    ?>
    </table>
</body>
</html>