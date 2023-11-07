<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM pelanggan ORDER BY id");
                ?>
                <center><h1>DATA PELANGGAN:</h1></center>
                <table id="pelanggan" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pelanggan</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Telpon</th>
                            <th>Alamat</th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(mysqli_num_rows($query) > 0){ ?>
                            <?php
                            $no = 1;
                            while($data = mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data["id"]; ?></td>
                                    <td><?php echo $data["nama"]; ?></td>
                                    <td><?php echo $data["jenis_kelamin"]; ?></td>
                                    <td><?php echo $data["telpon"]; ?></td>
                                    <td><?php echo $data["alamat"]; ?></td>
                                    <td>
                                        <center>
                                            <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="label label-danger"> Delete </a>
                                            &nbsp;
                                            <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning"> Ubah </a>
                                        </center>
                                    </td>
                                </tr>
                                <?php $no++; } ?>
                        <?php } ?>
                    </tbody>
                </table>
                <a class="btn btn-primary" style="margin-bottom:5px" href="tambah.php"> Tambah Pelanggan </a> 
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#pelanggan').DataTable();
        });
    </script>
</body>
</html>
