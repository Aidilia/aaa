<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/LKS-CLOUDBABEL2024-main//services/connection.php';

$sql = "SELECT * FROM guru";
$result = $conn->query($sql);
?>
<div class="container mt-2">
    <div class="row align-items-center ">
        <div class="col-md-10">
        <div class="alert alert-success px-2">
            Tabel Manajemen Data Guru
        </div>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="tambah_guru.php">Tambah Data</a>
        </div>
    </div>
</div>

<div class="container mt-3">
<table class="table table-bordered table-stripped" width="100%">
        <thead>
            <tr align="center">
                <th>#No</th>
                <th>Nama Guru</th>
                <th>Nip</th>
                <th>Mata Pelajaran</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($result) && $result->num_rows > 0) : ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td width="5%" align="center"><?= $row['id'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['nip'] ?></td>
                        <td><?= $row['mata_pelajaran'] ?></td>
                        <td align="center">
                            <a href="edit_guru.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <button type="button" onclick="hapus_guru(<?= $row['id'] ?>)"  class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php $conn->close(); ?>
        </tbody>
</table>
    <pre>
        Silahkan Lengkapi Skrip Dari halaman berikut
    </pre>
</div>