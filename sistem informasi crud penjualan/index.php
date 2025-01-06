/*---index.php---*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="barang.php">
    <title>Data Penjualan</title>
</head>
<style>
    .h3{
        padding: 0 560px;
    }

</style>
<body>
    <h3 class="h3">UD kampung besar</h3>
    <table border="1" cellspacing="0" cellpadding="3" >
    <tr>
        <th>Id</th>
        <th>kode barang</th>
        <th>barang terjual</th>
        <th>stok</th>
        <th>ganti</th>
    </tr>
    <?php
    include('koneksi.php');
    ?>
    
     <?php 
        $query = mysqli_query($koneksi,"select * from tbl_penjualan");
        $jumlah_data = mysqli_num_rows($query);
        echo"<h4>daftar barang yang terjual</h4>";
        echo "jumlah data yang terbaca :" .$jumlah_data;
        echo "</br>";
    ?> 
        
        <?php

         while($baris = mysqli_fetch_array($query)) 
            {
         ?>
                <tr>
                <td><?php echo $baris["id_penjualan"];?></td>
                <td><?php echo $baris["kode_penjualan"];?></td>
                <td><?php echo $baris["nama_ygterjual"];?></td>
                <td><?php echo $baris["stok_penjualan"];?></td>
                <td><a href="edit.php?id=<?php echo $baris['id_penjualan'];?>">edit</a>
                    <a href="delete.php?id=<?php echo $baris['id_penjualan'];?>">Delete</a>
                </td>

                </tr>
            <?php
            }
        ?>
    </table>
    <p><a href="tambah.php">tambah data</a></p>
        
</body>
</html>