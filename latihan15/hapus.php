<?php 
    require 'functions.php';

    // Menangkap nomor id
    $id = $_GET["id"];

    // Jika berhasil menghapus data dari id
    if( ( hapus($id) > 0 ) ) {

        // Akan ada baris atau record yang terpengaruhi
        echo "<script>
                    alert('Data berhasil dihapus');
                    document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                    alert('Data gagal dihapus');
                    document.location.href = 'index.php';
              </script>";
    }

?>