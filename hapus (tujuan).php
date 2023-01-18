<?php
require 'functions (tujuan).php';

$kd_tujuan = $_GET["kd_tujuan"];

if (hapus($kd_tujuan) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'tujuan.php';
        </script>
    ";
    
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'tujuan.php';
        </script>
    ";
}

?>