<?php 
require 'lib/function/function.php';

// bikin query
$community = query("SELECT * FROM community");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <link rel="stylesheet" href="others/css/style.css">
    <title>Data Komunitas</title>
</head>
<body>
        <div class="nama-judul">
            <h3 class="nama">DATA COMMUNITY</h3>
        </div>
    <!-- tampilan data -->
    <div class="container">
        <div class="table">
            <table class="table-teks" border="1px" cellpadding="10" cellspacing="0">
                    <tr class="bagian-head">
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Umur</th>
                            <th>Jabatan</th>
                            <th>Gambar</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach( $community as $row ) : ?>
                    <tr class="bagian-data">
                        <td><?php echo $i; ?></td>
                        <td>
                            <a href="lib/delete/delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin');">Hapus</a> |
                            <a href="lib/edit/edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                        </td>
                        <td><?php echo $row["nama"]; ?></td>
                        <td><?php echo $row["alamat"]; ?></td>
                        <td><?php echo $row["umur"]; ?></td>
                        <td><?php echo $row["jabatan"]; ?></td>
                        <td>
                            <img src="img/<?php echo $row["gambar"]; ?>" alt="">
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>

            </table>
        </div>
    </div>
    <div class="tambah">
        <a href="lib/add/add.php">Tambah Data</a>
    </div>
    <!-- akhir data tampilan -->
</body>
</html>