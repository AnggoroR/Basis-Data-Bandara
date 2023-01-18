<?php
require 'functions (jadwal).php';

$kd_maskapai = $_GET["kd_maskapai"];

if (hapus($kd_maskapai) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'jadwal.php';
        </script>
    ";
    
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'jadwal.php';
        </script>
    ";
}

?>