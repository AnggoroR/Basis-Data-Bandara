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
    $kd_tujuan = htmlspecialchars($data["kd_tujuan"]);
    $nama = htmlspecialchars($data["nama"]);
    $no_seat = htmlspecialchars($data["no_seat"]);
    $tujuan = htmlspecialchars($data["tujuan"]);
    $waktu = htmlspecialchars($data["waktu"]);

    // query untuk insert data
    $query = "INSERT INTO tiket VALUES ('', '$kd_tujuan', '$nama', '$no_seat', '$tujuan', '$waktu')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapus($no_tiket) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tiket WHERE no_tiket = $no_tiket");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    // mengambil data dari tiap elemen yang ada di form
    $no_tiket = $data["no_tiket"];
    $kd_tujuan = htmlspecialchars($data["kd_tujuan"]);
    $nama = htmlspecialchars($data["nama"]);
    $no_seat = htmlspecialchars($data["no_seat"]);
    $tujuan = htmlspecialchars($data["tujuan"]);
    $waktu = htmlspecialchars($data["waktu"]);


    // query untuk update data
    $query = "UPDATE tiket SET
                kd_tujuan = '$kd_tujuan',
                nama = '$nama',
                no_seat = '$no_seat',
                tujuan = '$tujuan',               
                waktu = '$waktu'
                WHERE no_tiket = $no_tiket
                ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM tiket WHERE 
                no_tiket LIKE '%$keyword%' OR 
                kd_tujuan LIKE '%$keyword%' OR 
                nama LIKE '%$keyword%' OR
                no_seat LIKE '%$keyword%' OR 
                tujuan LIKE '%$keyword%' OR               
                waktu LIKE '%$keyword%'
                "; 

    return query($query);
}

?>