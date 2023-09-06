<?php
session_start();

if (isset($_SESSION["items"])) {
    // Hapus semua item pesanan dari session
    unset($_SESSION["items"]);
}

// Redirect kembali ke halaman utama setelah reset
header("Location: index.php"); // Ganti "index.php" dengan nama file utama Anda
exit();
?>
