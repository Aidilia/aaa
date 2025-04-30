<?php include_once $_SERVER['DOCUMENT_ROOT'].'/LKS-CLOUDBABEL2024-MAIN/services/connection.php'; 
if(isset($_POST['nama']) && isset($_POST['nip']) && isset($_POST['mp'])){
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $mp = $_POST['mp'];
    
    $sql = "INSERT INTO guru (nama, nip, mata_pelajaran) VALUES('$nama','$nip','$mp')";
    if ($conn->query($sql) === TRUE) {
        header('Location: /LKS-CLOUDBABEL2024-MAIN/app/daftar_guru.php'); 
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();    
}else{
    echo "Terjadi Kesalahan Saat Menambah Data";
}?>
