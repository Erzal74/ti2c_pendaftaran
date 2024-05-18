<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | PNM</title>
    <link rel="stylesheet" href="css/bootstrap.min1.css">
</head>
<body>

    <div class="container mt-5">
        <header class="text-center mb-4">
            <h3>Mahasiswa yang sudah mendaftar</h3>
        </header>

        <nav class="mb-4 text-center">
            <a href="form-daftar.php" class="btn btn-primary">[+] Tambah Baru</a>
        </nav>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>

            <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);
                $no = 1;

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-warning btn-sm'>Edit</a> ";
                    echo "<a href='hapus.php?id=".$siswa['id']."' class='btn btn-danger btn-sm'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";

                    $no++;
                }
            ?>

            </tbody>
        </table>

        <p class="text-center">Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
