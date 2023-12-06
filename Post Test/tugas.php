<?php
// Inisialisasi variabel
$nim = $nama = $alamat = $email = $no_hp = $prodi = '';
$errors = [];

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi NIM
    if (isset($_POST['nim']) && !empty($_POST['nim'])) {
        $nim = $_POST['nim'];
    } else {
        $errors['nim'] = 'NIM is required';
    }

    // Validasi Nama
    if (isset($_POST['nama']) && !empty($_POST['nama'])) {
        $nama = $_POST['nama'];
    } else {
        $errors['nama'] = 'Nama is required';
    }

    // Validasi Alamat
    if (isset($_POST['alamat']) && !empty($_POST['alamat'])) {
        $alamat = $_POST['alamat'];
    } else {
        $errors['alamat'] = 'Alamat is required';
    }

    // Validasi Email
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $errors['email'] = 'Email is required';
    }

    // Validasi No HP
    if (isset($_POST['no_hp']) && !empty($_POST['no_hp'])) {
        $no_hp = $_POST['no_hp'];
    } else {
        $errors['no_hp'] = 'No HP is required';
    }

    // Validasi Prodi
    if (isset($_POST['prodi']) && !empty($_POST['prodi'])) {
        $prodi = $_POST['prodi'];
    } else {
        $errors['prodi'] = 'Prodi is required';
    }

    // Jika tidak ada error, proses data
    if (empty($errors)) {
        // Proses data (misalnya, simpan ke database)
        // ...

        // Tampilkan pesan sukses
        echo '<p>Data berhasil disubmit!</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .error-message {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>

<!-- Form HTML -->
<form method="post" action="">
    <label for="nim">NIM *</label>
    <input type="text" name="nim" value="<?php echo $nim; ?>" required>
    <span class="error-message"><?php echo isset($errors['nim']) ? $errors['nim'] : ''; ?></span>

    <label for="nama">Nama *</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>" required>
    <span class="error-message"><?php echo isset($errors['nama']) ? $errors['nama'] : ''; ?></span>

    <label for="alamat">Alamat *</label>
    <input type="text" name="alamat" value="<?php echo $alamat; ?>" required>
    <span class="error-message"><?php echo isset($errors['alamat']) ? $errors['alamat'] : ''; ?></span>

    <label for="email">Email *</label>
    <input type="email" name="email" value="<?php echo $email; ?>" required>
    <span class="error-message"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>

    <label for="no_hp">No HP *</label>
    <input type="text" name="no_hp" value="<?php echo $no_hp; ?>" required>
    <span class="error-message"><?php echo isset($errors['no_hp']) ? $errors['no_hp'] : ''; ?></span>

    <label for="prodi">Prodi *</label>
    <input type="text" name="prodi" value="<?php echo $prodi; ?>" required>
    <span class="error-message"><?php echo isset($errors['prodi']) ? $errors['prodi'] : ''; ?></span>

    <input type="submit" value="Submit">
</form>

</body>
</html>
