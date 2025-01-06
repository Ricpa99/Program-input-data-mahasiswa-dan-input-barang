/*---edit.php---*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
    .h3{
        padding: 0 560px;
    }

</style>
</head>

<body>
    <?php include("koneksi.php");?>
    <h3 class="h3">Edit Data</h3>
    <b>edit data</b>
    <?php
    $query = mysqli_query($koneksi, "select * from tbl_penjualan where id_penjualan ='".$_GET['id']."'");
    $baris = mysqli_fetch_array($query);

   ?> 
   <form action="proses_edit.php" method="post">
       <input type="hidden" name="id" value="<?php echo $baris['id_penjualan'];?>"/>
    <table>
        <tr>
            <td>kode barang</td>
            <td>:</td>
            <td><input type="text" name="kd_barang" value="<?php echo $baris["kode_penjualan"];?>"/></td>
        </tr>
        <tr>
            <td>Nama barang</td>
            <td>:</td>
            <td><input type="text" name="nm_barang" value="<?php echo $baris["nama_ygterjual"];?>"/></td>
        </tr>
        <tr>
            <td>Stok barang</td>
            <td>:</td>
            <td><input type="text" name="stok_penjualan" value="<?php echo $baris["stok_penjualan"];?>"/></td>
        </tr>
        <tr>
            <td> <input type="submit" value="Update"></td>
            <td colspan="2"> <a href="index.php">kembali</a> </td>
        </tr>
    </table>
    </form>

    
</body>
</html>