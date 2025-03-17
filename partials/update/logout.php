<?php 
// Untuk mengaktifkan session pada php
session_start();
// Untuk menghapus semua session
session_destroy();
// pindah halaman ke halaman login
echo"<script>
        alert('Anda telah Logout');
        document.location = '../admin/login.php'
    </script>";
?>