
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-3.5.1.js"></script>
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
    <form>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td> <input type="text" name="nama_mahasiswa"></td>
        </tr>
        <tr>
            <td>Npm</td>
            <td>:</td>
            <td><input type="text" name="npm_mahasiswa"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat_mahasiswa"></td>
            
        </tr>
        <tr>
            <td><input type="submit" value="simpan" name="tombol_submit"></td>
            <td colspan="2"><a href="index.php">kembali</a></td>
        </tr>
       
    </table>
    <script>
            $(document).ready(function (){
                 $("input[name='tombol_submit']").click(function (e){
                    e.preventDefault();

                    var nama = $("input[name='nama_mahasiswa']").val();
                    var npm = $("input[name='npm_mahasiswa']").val();
                     var alamat = $("input[name='alamat_mahasiswa']").val();
                    

                    $.ajax ({
                        method : "POST",
                         url    : "./proses1.php",
                         data   : {nama : nama , npm : npm , alamat : alamat},
                        success : function (data){
                            alert('penambahan data berhasil');
                        },
                           
                         error : function (jQXHR, Status, ErrorThrown ) {
                            alert('proses gaga!, status :' + status);
                        }
                    }); 
                });
            });
            </script>
    </form>
</body>
</html>