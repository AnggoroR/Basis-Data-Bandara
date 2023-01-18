<?php
require 'functions (pesawat).php';

$kd_pesawat = $_GET["kd_pesawat"];

if (hapus($kd_pesawat) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'pesawat.php';
        </script>
    ";
    
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'pesawat.php';
        </script>
    ";
}

?>