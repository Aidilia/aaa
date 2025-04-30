<div class="container mt-2">
    <div class="alert alert-success text-center">
        Tambah Guru
    </div>
    <!--  -->
    <form action="/LKS-CLOUDBABEL2024-MAIN/services/save_sekolah.php" method="POST">
    <div class="card">
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="form-group mb-2">
                <label for="">Nip</label>
                <input type="text" class="form-control" name="nip" id="nip" placeholder="nip">
            </div>
            <div class="form-group mb-2">
                <label for="">Mata Pelajaran</label>
                <input type="text" class="form-control" name="mp" id="mp" placeholder="mata pelajara">
            </div>            
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">SIMPAN</button>
        </div>
    </div>
    </form>
</div>