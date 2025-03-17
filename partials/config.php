<?php

    $conn = mysqli_connect("localhost","root","","osis");
    if(mysqli_connect_errno()){
        echo" Koneksi Database Gagal! :" . mysqli_connect_error();
    }
    
    function query($query){
      global $conn;
      $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
          $rows[] = $row;
        }
        return $rows;
    }
    
    function tambah($data){
      global $conn;

      $username = strtolower(stripslashes($data['username']));
      $password = mysqli_real_escape_string($conn,$data['password']);
      
      // upload foto
      $foto = upload();
        if(!$foto){
          return false;
        }

      $no_calon = htmlspecialchars($data['no_calon']);
      $nama_calon = htmlspecialchars($data['nama_calon']);
      $visi = htmlspecialchars($data['visi']);
      $misi = htmlspecialchars($data['misi']);
      $nis = $_POST['nis'];
      $nip = $_POST['nip'];
      $jumlah_suara = htmlspecialchars($data['jumlah_suara']);

      $query = "INSERT INTO calon VALUES ('','$username','$password','$foto','$no_calon','$nama_calon','$visi','$misi','$jumlah_suara',$nis,$nip)";
      mysqli_query($conn,$query);

      return mysqli_affected_rows($conn);
    }

    function upload(){
       $namaFile = $_FILES['foto']['name'];
       $ukuran = $_FILES['foto']['size'];
       $error = $_FILES['foto']['error'];
       $tmpName = $_FILES['foto']['tmp_name'];

      //  cek apakah tidak ada gambar yang di upload
      if($error === 4){
        echo"<script>
            alert('pilih gambar terlebih dahulu!');
          </script>";
          return false;
      }

      // cek apakah ynag di upload adalah gambar
      $ekstensiFotoValid = ['jpg','jpeg','png'];
      $ekstensiFoto = explode('.',$namaFile);
      $ekstensiFoto = strtolower(end($ekstensiFoto));
      if(!in_array($ekstensiFoto,$ekstensiFotoValid)){
          echo"<script>
            alert('yang anda upload bukan gambar!');
          </script>";
        return false;
      }
      // generate nama file baru 
      $namaFileBaru = uniqid();
      $namaFileBaru .='.';
      $namaFileBaru .= $ekstensiFoto; 

      move_uploaded_file($tmpName,'../upload/'.$namaFileBaru);

      return $namaFileBaru;
    }

// Edit
function guru($data2){
  global $conn;

  $nip = htmlspecialchars($data2['nip']);
  $nama = htmlspecialchars($data2['nama']);
  $jk = htmlspecialchars($data2['jk']);
  $username = strtolower(stripslashes($data2['username']));
  $password = mysqli_real_escape_string($conn,($data2['password']));
  $id_panitia = $data2['id_panitia'];

  $qry = "UPDATE guru SET nip ='$nip',nama = '$nama',jk = '$jk',username = '$username',password = '$password', id_panitia = $id_panitia WHERE nip = '$nip'";

  mysqli_query($conn,$qry);

  return mysqli_affected_rows($conn);
  
}

function kelas($data3){
  global $conn;

  $id_kelas = $data3['id_kelas']; 
  $kelas = htmlspecialchars($data3['kelas']);
  $jumlah = htmlspecialchars($data3['jumlah']);
  $id_panitia = $data3['id_panitia'];

  $update = "UPDATE kelas SET kelas = '$kelas',jumlah = '$jumlah',id_panitia = $id_panitia WHERE id_kelas = '$id_kelas'";

  mysqli_query($conn,$update);

  return mysqli_affected_rows($conn);
  
}

function siswa($data4){
  global $conn;

  $nis = $data4['nis']; 
  $nama = htmlspecialchars($data4['nama']);
  $jk = htmlspecialchars($data4['jk']);
  $id_kelas  = htmlspecialchars($data4['id_kelas']);
  $username = strtolower(stripslashes($data4['username']));
  $password = mysqli_real_escape_string($conn,($data4['password']));
  
  $ubah = "UPDATE siswa SET nis ='$nis', nama = '$nama', jk = '$jk', id_kelas = $id_kelas, username = '$username', password = '$password' WHERE nis = $nis";
  mysqli_query($conn,$ubah);

  return mysqli_affected_rows($conn);
  
}

function panitia($data5){
  global $conn;

  $id_panitia = $data5['id_panitia'];
  $nama = htmlspecialchars($data5['nama']);
  $username = strtolower(stripslashes($data5['username']));
  $password = mysqli_real_escape_string($conn,($data5['password']));

  $update = "UPDATE panitia SET nama = '$nama',username = '$username',password = $password WHERE id_panitia = '$id_panitia'";

  mysqli_query($conn,$update);

  return mysqli_affected_rows($conn);
  
}

function ubah($data6){
  global $conn;

  $id_calon = $data6['id_calon'];
  $username = strtolower(stripslashes($data6['username']));
  $password = mysqli_real_escape_string($conn,($data6['password']));
  $foto_lama = htmlspecialchars($data6['foto_lama']);
  $no_calon = htmlspecialchars($data6['no_calon']);
  $nama_calon = htmlspecialchars($data6['nama_calon']);
  $visi = htmlspecialchars($data6['visi']);
  $misi = htmlspecialchars($data6['misi']);

  if($_FILES['foto']['error'] === 4){
    $foto = $foto_lama;
  }else{
    $foto = upload();
  }

  $query = "UPDATE calon SET username = '$username',password = '$password',foto = '$foto',no_calon = '$no_calon',nama_calon = '$nama_calon',visi = '$visi',misi= '$misi' WHERE id_calon = $id_calon";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}

// hapus
function teacher($nip){
  global $conn;
  mysqli_query($conn,"DELETE FROM guru WHERE nip = '$nip'");
  return mysqli_affected_rows($conn);
}

function clas($id_kelas){
  global $conn;
  mysqli_query($conn,"DELETE FROM kelas WHERE id_kelas = '$id_kelas'");
  return mysqli_affected_rows($conn);
}

function student($nis){
  global $conn;
  mysqli_query($conn,"DELETE FROM siswa WHERE nis = '$nis'");
  return mysqli_affected_rows($conn);
}

function comitte($id_panitia){
  global $conn;
  mysqli_query($conn,"DELETE FROM panitia WHERE id_panitia = '$id_panitia'");
  return mysqli_affected_rows($conn);
}

function calon($id_calon){
  global $conn;
  mysqli_query($conn,"DELETE FROM calon WHERE id_calon = '$id_calon'");
  return mysqli_affected_rows($conn);
}
?>