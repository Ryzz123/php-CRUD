<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../others/css/style.css"> -->
    <title>Tambah Data Community</title>
</head>
<style>
    body {
        text-align: center;
    }
    
    ul {
        list-style-type: none;
    }

    li {
        margin-top: 2rem;
    }
</style>
<body>
    <div class="tambah">
        <form method="post" action="tambah.php">
            <ul>
                <li>
                    <label for="nama">nama :</label>
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="alamat">alamat :</label>
                    <input type="text" name="alamat" id="alamat">
                </li>
                <li>
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" id="umur">
                </li>
                <li>
                    <label for="jabatan">jabatan :</label>
                    <input type="text" name="jabatan" id="jabatan">
                </li>
                <li>
                    <label for="gambar">gambar :</label>
                    <input type="text" name="gambar" id="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>