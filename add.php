<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Mahasiswa Baru</h2>
    <form method="POST">
        Nama: <input type="text" name="fullname" required><br><br>
        NIM: <input type="text" name="nim" required><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>

    <?php
    include 'connect.php';

    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $nim = $_POST['nim'];

        $result = mysqli_query($conn, "INSERT INTO students (fullname, nim) VALUES ('$fullname', '$nim')");
        
        if($result) {
            header("location:index.php");
        } else {
            echo "Gagal menambahkan data!";
        }
    }
    ?>
    
    <p><a href="index.php">Kembali ke Daftar Mahasiswa</a></p>
</body>
</html>