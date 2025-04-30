
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/LKS-CLOUDBABEL2024-MAIN/services/connection.php'; ?>
<div class="container mt-2">
<?php if(isset($_GET['id'])): ?>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM guru WHERE id = $id";
    $result = $conn->query($sql);        
    ?>
    <?php if ($result->num_rows == 1) :?>
    <?php $data = $result->fetch_all(MYSQLI_ASSOC)[0];?>
    <?php $conn->close(); ?>
    <div class="alert alert-info text-center">
        Update Data Guru
    </div>
    <!--  -->
    <form action="/LKS-CLOUDBABEL2024-MAIN/services/update_sekolah.php?id=<?= $_GET['id'] ?>" method="POST">
    <div class="card">
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="">Nama Guru</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="">Nip</label>
                <input type="text" class="form-control" name="nip" id="nip" value="<?= $data['nip'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="">Mata Pelajaran</label>
                <input type="text" class="form-control" name="mata pelajaran" id="mata pelajaran" value="<?= $data['mata_pelajaran'] ?>">
            </div>            
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">SIMPAN PERUBAHAN</button>
        </div>
    </div>
    </form>
    <!--  -->
    <?php else: ?>
        <div class="alert alert-danger">
            <h3 class="text-center">Data Tidak Ditemukan Database !!!</h3>
        </div>
    <?php endif; ?>
<?php else: ?>
    <div class="alert alert-danger">
        <h3 class="text-center">Parameter Data Tidak Ditemukan !!!</h3>
    </div>
<?php endif; ?>
</div>