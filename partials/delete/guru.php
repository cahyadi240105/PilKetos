<?php 
    $nip = $_GET['nip'];
    require "../config.php";
    if(teacher($nip)>0){
        echo"<script>
				alert('Data berhasil dihapus');
				document.location = '../admin/guru.php'
			</script>";
        }else{
            echo"<script>
                    alert('Data gagal dihapus');
                    document.location = '../admin/guru.php'
                </script>";
        }
    
?>