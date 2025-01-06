/*---proses.php---*/
<?php
include('./koneksi.php');
$kode = $_POST['kd_barang'];
$nama = $_POST['nm_barang'];
$stok = $_POST['stok_barang'];

$query = mysqli_query($koneksi, "select id_penjualan from tbl_penjualan where
kode_penjualan='".$kode."'");
if(mysqli_num_rows($query)>0)
{
    echo"<p>penambahan data baru gagal, kode duplicat...</p>";
    ?>
    <a href="tambah.php">kembali kehalaman tambah</a>
    <?php
}else
{

    $query = mysqli_query($koneksi, "insert into tbl_penjualan (kode_penjualan, nama_ygterjual, stok_penjualan)
    values ( '".$kode."','".$nama."','".$stok."')");
    if($query)
        {
            echo "<p>penambahan data baru telah berhasil..</p>";
            ?>
            <a href="tambah.php">kembali kehalaman tambah</a>
            <?php
        }else
    {
        echo "Terjadi kegagalan data baru..";
    }
}
?>