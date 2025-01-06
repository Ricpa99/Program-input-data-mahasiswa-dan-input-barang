/*---koneksi.php---*/
<?php
 $koneksi = mysqli_connect("localhost", "root", "", "db_penjualan"); 
 if (!$koneksi)
 {
     die ("koneksi gagal!");
 }

?>