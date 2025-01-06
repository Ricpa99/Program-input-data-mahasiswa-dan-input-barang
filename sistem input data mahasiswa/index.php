<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-3.5.1.js"></script>
    <title>jqueryajax</title>
</head>
<body>
    <form>
        <table border="1" cellspacing="0" cellpadding="3">
        <tr>
        <th>No</th>
        <th>Nama mahasiswa</th>
        <th>Npm mahasiswa</th>
        <th>Alamat mahasiswa</th>
    </tr>
        <?php
            include('koneksi.php');
            $query = mysqli_query($koneksi,"select * from tbl_mahasiswa");
        ?>
            <?php

                while($baris = mysqli_fetch_array($query)) 
            {
        ?>
            <tr>
                <td><?php echo $baris["no"];?></td>
                <td><?php echo $baris["nama_mahasiswa"];?></td>
                <td><?php echo $baris["npm_mahasiswa"];?></td>
                <td><?php echo $baris["alamat_mahasiswa"];?></td>
                

            </tr>
        <?php
        }
        ?>    
        </table>
     </form>

            
<p><a href="tambah.php">tambah data</a></p>
    
    
</body>
</html>