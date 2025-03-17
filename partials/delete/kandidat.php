<?php 
    $id_calon = $_GET['id_calon'];
    require "../config.php";
    if(calon($id_calon)>0){
        echo"<script>
				alert('Data berhasil dihapus');
				document.location = '../admin/kandidat.php'
			</script>";
        }else{
            echo"<script>
                    alert('Data gagal dihapus');
                    document.location = '../admin/kandidat.php'
                </script>";
        }
    
?>