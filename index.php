<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | PNM</title>
    <link rel="stylesheet" href="css/bootstrap.min1.css">
</head>
<body>

    <div class="container mt-5">
        <header class="text-center mb-4">
            <h3>Pendaftaran Mahasiswa Baru</h3>
            <h1>Politeknik Negeri Madiun</h1>
        </header>

        <nav class="mb-4">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary mx-1" href="form-daftar.php">Daftar Baru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-secondary mx-1" href="list-siswa.php">Pendaftar</a>
                </li>
            </ul>
        </nav>

        <?php if (isset($_GET['status'])): ?>
            <div class="alert <?php echo $_GET['status'] == 'sukses' ? 'alert-success' : 'alert-danger'; ?>" role="alert">
                <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
