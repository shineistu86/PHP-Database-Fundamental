<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <?php
    include 'connect.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
    $d = mysqli_fetch_assoc($data);
    ?>

    <form method="POST">
        Nama: <input type="text" name="fullname" value="<?= $d['fullname']; ?>" required><br><br>
        NIM: <input type="text" name="nim" value="<?= $d['nim']; ?>" required><br><br>
        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $fullname = $_POST['fullname'];
        $nim = $_POST['nim'];
        
        $result = mysqli_query($conn, "UPDATE students SET fullname='$fullname', nim='$nim' WHERE id=$id");
        
        if($result) {
            header("location:index.php");
        } else {
            echo "Gagal mengupdate data!";
        }
    }
    ?>
    
    <p><a href="index.php">Kembali ke Daftar Mahasiswa</a></p>
</body>
</html>