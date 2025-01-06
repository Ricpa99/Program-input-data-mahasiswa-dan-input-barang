/*---proses.php---*/
<?php
include('./koneksi.php');
$kode = $_POST['nama_mahasiswa'];
$nama = $_POST['npm_mahasiswa'];
$stok = $_POST['alamat_mahasiswa'];

$query = mysqli_query($koneksi, "select no from tbl_mahasiswa where
nama_mahasiswa='".$kode."'");
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