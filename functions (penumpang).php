<?php
// menghubungkan ke database
$conn = mysqli_connect("localhost", "root", "", "bandara");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    // mengambil data dari tiap elemen yang ada di form
    $nama = htmlspecialchars($data["nama"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $umur = htmlspecialchars($data["umur"]);

    // query untuk insert data
    $query = "INSERT INTO penumpang VALUES ('', '$nama', '$jenis_kelamin', '$alamat', '$no_hp', '$umur')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM penumpang WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    // mengambil data dari tiap elemen yang ada di form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $umur = htmlspecialchars($data["umur"]);

    // query untuk update data
    $query = "UPDATE penumpang SET
                nama = '$nama',
                jenis_kelamin = '$jenis_kelamin',
                alamat = '$alamat',
                no_hp = '$no_hp',
                umur = '$umur'
                WHERE id = $id";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM penumpang WHERE
                id LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR 
                jenis_kelamin LIKE '%$keyword%' OR 
                alamat LIKE '%$keyword%' OR 
                no_hp LIKE '%$keyword%' OR 
                umur LIKE '%$keyword%'";

    return query($query);
}

?>