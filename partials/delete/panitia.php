<?php 
    $id_panitia = $_GET['id_panitia'];
    require "../config.php";
    if(comitte($id_panitia)>0){
        echo"<script>
				alert('Data berhasil dihapus');
				document.location = '../admin/panitia.php'
			</script>";
        }else{
            echo"<script>
                    alert('Data gagal dihapus');
                    document.location = '../admin/panitia.php'
                </script>";
        }
    
?>