<?php

require_once 'connection.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

$sql = "INSERT INTO person (nama, email, no_hp) VALUES ('$nama', '$email', '$no_hp')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>