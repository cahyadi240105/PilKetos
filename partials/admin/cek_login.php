<?php 
    session_start();
    require "../config.php";

    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']); 

    $login = "SELECT * FROM panitia WHERE username = '$username' and password = '$password'";
    $query = mysqli_query($conn,$login);
    $cek = mysqli_num_rows($query);
    
    if($cek > 0){
        $data = mysqli_fetch_assoc($query);
        
        if($data){
            $_SESSION['username'] = $username;
            echo"<script>
                    alert('Anda telah berhasil login');
                    document.location = 'index.php';
                </script>";
        }else{
            header("location:login.php?message=failed");
        }
    }else{
        header("location:login.php?message=failed");
    }
?>