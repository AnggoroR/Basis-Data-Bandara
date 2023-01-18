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
    $kd_maskapai = htmlspecialchars($data["kd_maskapai"]);
    $id = htmlspecialchars($data["id"]);
    $jml_seat = htmlspecialchars($data["jml_seat"]);
    $no_seat = htmlspecialchars($data["no_seat"]);
    $harga = htmlspecialchars($data["harga"]);

    // query untuk insert data
    $query = "INSERT INTO pesawat VALUES ('', '$kd_maskapai', '$id', '$jml_seat', '$no_seat', '$harga')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapus($kd_pesawat) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pesawat WHERE kd_pesawat = $kd_pesawat");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    // mengambil data dari tiap elemen yang ada di form
    $kd_pesawat = $data["kd_pesawat"];
    $kd_maskapai = htmlspecialchars($data["kd_maskapai"]);
    $id = htmlspecialchars($data["id"]);
    $jml_seat = htmlspecialchars($data["jml_seat"]);
    $no_seat = htmlspecialchars($data["no_seat"]);
    $harga = htmlspecialchars($data["harga"]);

    // query untuk update data
    $query = "UPDATE pesawat SET
                kd_maskapai = '$kd_maskapai',
                id = '$id',
                jml_seat = '$jml_seat',
                no_seat = '$no_seat',
                harga = '$harga'
                WHERE kd_pesawat = $kd_pesawat";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM pesawat WHERE 
                kd_pesawat LIKE '%$keyword%' OR
                kd_maskapai LIKE '%$keyword%' OR
                id LIKE '%$keyword%' OR
                jml_seat LIKE '%$keyword%' OR 
                no_seat LIKE '%$keyword%' OR
                harga LIKE '%$keyword%'"; 

    return query($query);
}

?>