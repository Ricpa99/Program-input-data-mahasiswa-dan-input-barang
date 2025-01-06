/*---proses_edit.php---*/
<?php
include('koneksi.php');

$id = $_POST['id'];
$kode = $_POST['kd_barang'];
$stok = $_POST['stok_penjualan'];
$nama = $_POST['nm_barang'];

$query = mysqli_query($koneksi, "update tbl_penjualan set 
kode_penjualan='".$kode."',
nama_ygterjual='".$nama."',
stok_penjualan='".$stok."' where id_penjualan='".$id."'");

if($query)
{
    echo"<p>Update data barang berhasil..</p>";
    echo " <a href='edit.php?id=$id'>kembali kehalaman edit</a>";
}else
{
    echo"<p>Update data gagal..</p>";
    echo " <a href='edit.php?id=$id'>kembali kehalaman edit</a>";
}
?>