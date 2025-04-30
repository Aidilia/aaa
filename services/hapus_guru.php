<?php include_once $_SERVER['DOCUMENT_ROOT'].'/LKS-CLOUDBABEL2024-MAIN//services/connection.php'; ?>
<?php if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM guru WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(array('status'=> TRUE, 'message'=> "Guru berhasil dihapus"));
    } else {
        echo json_encode(array('status'=> TRUE, 'message'=>  "Error: " . $sql . "<br>" . $conn->error));
    }
    $conn->close();
} else {
    echo json_encode(array('status'=> FALSE));
}
?>