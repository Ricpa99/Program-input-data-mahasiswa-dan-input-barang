/*---tambah.php---*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
    <style>
    .h3{
        padding: 0 599px;
    }

</style>
</head>
<body>
<h3 class="h3">Edit Data</h3>
    <b>Tambah Data Baru</b><br><br>
    <form action="proses.php" method="post">
    <table>
        <tr>
            <td>Kode barang</td>
            <td>:</td>
            <td> <input type="text" name="kd_barang"> </td>
        </tr>
        <tr>
            <td>Barang terjual</td>
            <td>:</td>
            <td><input type="text" name="nm_barang"></td>
        </tr>
        <tr>
            <td>Stok barang</td>
            <td>:</td>
            <td><input type="text" name="stok_barang"></td>
            
        </tr>
        <tr>
            <td><input type="submit" value="simpan"></td>
            <td colspan="2"><a href="index.php">kembali</a></td>
        </tr>
       
    </table>
    </form>
</body>
</html>