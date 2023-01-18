<?php
require 'functions (penumpang).php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'penumpang.php';
        </script>
    ";
        
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'penumpang.php';
        </script>
    ";
}

?>