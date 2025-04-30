<?php include_once $_SERVER['DOCUMENT_ROOT'].'/LKS-CLOUDBABEL2024-MAIN//services/connection.php'; 
if(isset($_GET['id'])){
    if($_GET['id']!= NULL){
        $id = $_GET['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        
        $sql = "UPDATE sekolah 
        SET nama = '$nama', alamat = '$alamat', telepon = '$telepon', email = '$email' 
        WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            header('Location: /LKS-CLOUDBABEL2024-MAIN/app/daftar_sekolah.php'); 
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>
