<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Hello World</h1>
    
    <?php
    $panjang = 10;
    $lebar = 5;

    $luas = $panjang * $lebar;
    $keliling = 2 * ($panjang + $lebar);

    echo "Luas Persegi Panjang: $luas <br>";
    echo "Keliling Persegi Panjang: $keliling";
    ?>
    <br>
    <?php
    $nilai = 75;

    if ($nilai >= 85) {
        echo "Grade A";
    } elseif ($nilai >= 75) {
        echo "Grade C";
    } else {
        echo "Grade D";
    }
    ?>
    
    <h2>Data Mahasiswa</h2>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Aksi</th>
    </tr>
    <?php
    include 'connect.php';
    $no = 1;
    $data = mysqli_query($conn, "SELECT * FROM students");
    while ($d = mysqli_fetch_assoc($data)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $d['fullname']; ?></td>
        <td><?= $d['nim']; ?></td>
        <td>
            <a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
            <a href="delete.php?id=<?= $d['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
    </table>
    
    <p><a href="add.php">Tambah Mahasiswa</a></p>
</body>
</html>