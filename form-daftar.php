<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | PNM</title>
    <link rel="stylesheet" href="css/bootstrap.min1.css">
</head>
<body>

    <div class="container mt-5">
        <header class="text-center mb-4">
            <h3>Formulir Pendaftaran Mahasiswa Baru</h3>
        </header>

        <form action="proses-pendaftaran.php" method="POST">
            <fieldset class="border p-4">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama lengkap" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" name="alamat" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" required>
                        <label class="form-check-label" for="jenis_kelamin">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" required>
                        <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="agama">Agama:</label>
                    <select class="form-control" name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sekolah_asal">Sekolah Asal:</label>
                    <input type="text" class="form-control" name="sekolah_asal" placeholder="Nama sekolah" required>
                </div>

                <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
            </fieldset>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
