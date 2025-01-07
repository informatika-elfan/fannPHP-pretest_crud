<?php
    require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Orang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mb-5">Inputan Sederhana</h1>
    <form action="proses_insert.php" method="post" class="container">
        <input type="text" name="nama" placeholder="Nama" class="form-control mb-3" >
        <input type="email" name="email" placeholder="email" class="form-control mb-3">
        <input type="text" name="no_hp" placeholder="No HP" class="form-control mb-3">
        <input type="submit" class="btn btn-primary">
    </form>


    <?php
        $sql = "SELECT * FROM person";
        $result = mysqli_query($conn, $sql);
    ?>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['no_hp'] ?></td>
                    <td>
                        <a href="proses_delete.php?id=<?php echo $row['id_person']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>