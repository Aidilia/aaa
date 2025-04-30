<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/LKS-CLOUDBABEL2024-MAIN/services/connection.php'; 

if(isset($_POST['nama']) && isset($_POST['almt']) && isset($_POST['tlp']) && isset($_POST['email'])){
    $nama = $_POST['nama'];
    $almt = $_POST['almt'];
    $tlp = $_POST['tlp'];
    $email = $_POST['email'];

    $sql = "INSERT INTO sekolah (nama, alamat, telepon, email) VALUES('$nama','$almt','$tlp', '$email')";
    if ($conn->query($sql) === TRUE) {
        header('Location: /LKS-CLOUDBABEL2024-MAIN/app/daftar_sekolah.php'); 
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();    
}else{
    echo "Terjadi Kesalahan Saat Menambah Data";
}
?>
