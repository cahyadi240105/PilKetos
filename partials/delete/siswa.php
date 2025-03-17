<?php 
    $nis = $_GET['nis'];
    require "../config.php";
    if(student($nis)>0){
        echo"<script>
				alert('Data berhasil dihapus');
				document.location = '../admin/siswa.php'
			</script>";
        }else{
            echo"<script>
                    alert('Data gagal dihapus');
                    document.location = '../admin/siswa.php'
                </script>";
        }
    
?>