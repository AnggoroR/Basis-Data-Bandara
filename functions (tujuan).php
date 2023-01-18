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
    $kd_pesawat = htmlspecialchars($data["kd_pesawat"]);
    $nama_bandara = htmlspecialchars($data["nama_bandara"]);

    // query untuk insert data
    $query = "INSERT INTO tujuan VALUES ('', '$kd_pesawat', '$nama_bandara')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapus($kd_tujuan) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tujuan WHERE kd_tujuan = $kd_tujuan");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    // mengambil data dari tiap elemen yang ada di form
    $kd_tujuan = $data["kd_tujuan"];
    $kd_pesawat = htmlspecialchars($data["kd_pesawat"]);
    $nama_bandara = htmlspecialchars($data["nama_bandara"]);


    // query untuk update data
    $query = "UPDATE tujuan SET
                kd_pesawat = '$kd_pesawat',
                nama_bandara = '$nama_bandara'
                WHERE kd_tujuan = $kd_tujuan";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM tujuan WHERE 
                kd_tujuan LIKE '%$keyword%' OR
                kd_pesawat LIKE '%$keyword%' OR 
                nama_bandara LIKE '%$keyword%'"; 

    return query($query);
}

?>