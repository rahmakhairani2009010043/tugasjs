<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Pelanggan</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('input').on('input', function () {
                var allFilled = true;
                $('input').each(function () {
                    if ($(this).val() === '') {
                        allFilled = false;
                        return false; 
                    }
                });

                if (allFilled == true) {
                    $('#submitBtn').prop('disabled', false);
                } else {
                    $('#submitBtn').prop('disabled', true);
                }
            });
        });
    </script>
</head>
<body>
 
  &nbsp;<form action="proses_tambah.php" method="post">
   <table>&nbsp;
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin"></td>
        </tr>
        <tr>
            <td>Telpon</td>
            <td>:</td>
            <td><input type="text" name="telpon"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
    </table><br>
    <input type="submit" id="submitBtn" value="Simpan" disabled>
  </form>
</body>
</html>