<?php 
    require "../config.php";
    $kandidat = $_GET['id_calon'];
    $edit = "UPDATE calon SET jumlah_suara = jumlah_suara+1 WHERE id_calon = '$kandidat'";
    $simpan = mysqli_query($conn,$edit);
    if($simpan){
        echo"<script>
                alert('Terimakasih telah melakukan voting,sekarang anda akan dialihkan ke halaman login kembali');
                document.location = 'logout.php';
            </script>";
    }else{
        header("location : index.php");
    }
?>