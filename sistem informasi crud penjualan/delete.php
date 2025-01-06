/*---delete.php---*/
<?php
include('koneksi.php');
$id = $_GET['id'];


$query = mysqli_query($koneksi, "delete from tbl_penjualan where id_penjualan= '".$id."'");

if($query)
{
    echo "<P>Data berhasil di hapus</P>";
    echo "<a href='index.php'>kembali<a/>";
}else
{
    echo "<p>Data gagal di hapus...</P>'";
    echo "<a href='index.php'>kembali<a/>";
}
?>