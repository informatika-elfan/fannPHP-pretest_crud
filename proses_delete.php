<?php
require_once 'connection.php';

$id = $_GET['id_person'];

$sql = "DELETE FROM person WHERE id=$id_person";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>