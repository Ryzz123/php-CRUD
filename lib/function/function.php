<?php 
// koneksikan ke database
$conn = mysqli_connect('localhost', 'root', '', 'php_dasar');

function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// tambah data
function tambah($data) {
    global $conn;
    // data dari element input/form
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $umur = htmlspecialchars($data["umur"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "INSERT INTO community VALUES
                ('', '$nama', '$alamat', '$umur', '$jabatan', '$gambar')
    ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

// hapus data
function hapus($id) {
    global $conn;
    $query = "DELETE FROM community WHERE id = $id";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

// function ubah data
function ubah($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $umur = htmlspecialchars($data["umur"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "UPDATE community SET
                nama = '$nama',
                alamat = '$alamat',
                umur = '$umur',
                jabatan = '$jabatan',
                gambar = '$gambar'
                WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>