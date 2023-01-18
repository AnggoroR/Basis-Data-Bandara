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
    $kd_tujuan = htmlspecialchars($data["kd_tujuan"]);
    $tujuan = htmlspecialchars($data["tujuan"]);
    $waktu = htmlspecialchars($data["waktu"]);

    // query untuk insert data
    $query = "INSERT INTO jadwal VALUES ('', '$kd_pesawat', '$kd_tujuan', '$tujuan', '$waktu')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapus($kd_maskapai) {
    global $conn;
    mysqli_query($conn, "DELETE FROM jadwal WHERE kd_maskapai = $kd_maskapai");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    // mengambil data dari tiap elemen yang ada di form
    $kd_maskapai = $data["kd_maskapai"];
    $kd_pesawat = htmlspecialchars($data["kd_pesawat"]);
    $kd_tujuan = htmlspecialchars($data["kd_tujuan"]);
    $tujuan = htmlspecialchars($data["tujuan"]);
    $waktu = htmlspecialchars($data["waktu"]);

    // query untuk update data
    $query = "UPDATE jadwal SET
                kd_pesawat = '$kd_pesawat',
                kd_tujuan = '$kd_tujuan',
                tujuan = '$tujuan',
                waktu = '$waktu'
                WHERE kd_maskapai = $kd_maskapai";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM jadwal WHERE 
                kd_maskapai LIKE '%$keyword%' OR
                kd_pesawat LIKE '%$keyword%' OR
                kd_tujuan LIKE '%$keyword%' OR
                tujuan LIKE '%$keyword%' OR 
                waktu LIKE '%$keyword%'"; 

    return query($query);
}

?>