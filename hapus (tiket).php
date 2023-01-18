<?php
require 'functions (tiket).php';

$no_tiket = $_GET["no_tiket"];

if (hapus($no_tiket) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'tiket.php';
        </script>
    ";
    
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'tiket.php';
        </script>
    ";
}

?>