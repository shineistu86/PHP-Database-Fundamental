<?php
include 'connect.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM students WHERE id=$id");

if($result) {
    header("location:index.php");
} else {
    echo "Gagal menghapus data!";
}
?>