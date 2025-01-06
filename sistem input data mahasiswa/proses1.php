
<?php
include('./koneksi.php');
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];

$query = mysqli_query($koneksi, "select no from tbl_mahasiswa where nama_mahasiswa='".$nama."'" );

?>
<?php
{
    $query = mysqli_query($koneksi, "insert into tbl_mahasiswa (nama_mahasiswa, npm_mahasiswa, alamat_mahasiswa)
    values ( '".$nama."','".$npm."','".$alamat."')");
}
?>