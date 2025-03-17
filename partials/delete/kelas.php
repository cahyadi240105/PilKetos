<?php 
    $id_kelas = $_GET['id_kelas'];
    require "../config.php";
    if(clas($id_kelas)>0){
        echo"<script>
				alert('Data berhasil dihapus');
				document.location = '../admin/kelas.php'
			</script>";
        }else{
            echo"<script>
                    alert('Data gagal dihapus');
                    document.location = '../admin/kelas.php'
                </script>";
        }
    
?>