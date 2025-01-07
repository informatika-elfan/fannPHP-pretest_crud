<?php
// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    echo "<div class='alert alert-success' role='alert'>
            Data berhasil diperbarui! <br> 
            Nama: $name <br>
            Email: $email
            no_hp: $no_hp
          </div>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2>Formulir Pembaruan Data</h2>
        <form method="POST" action="update.php">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">no_hp</label>
                <input type="no_hp" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</body>
</html>
