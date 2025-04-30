<div class="container mt-2">
    <div class="alert alert-success text-center">
        Tambah Sekolah
    </div>
    <!--  -->
    <form action="/LKS-CLOUDBABEL2024-MAIN/services/save_sekolah.php" method="POST">
    <div class="card">
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="">Nama Sekolah</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Sekolah">
            </div>
            <div class="form-group mb-2">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="almt" id="almt" placeholder="Alamat">
            </div>
            <div class="form-group mb-2">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="tlp" id="tlp" placeholder="Telepon">
            </div>
            <div class="form-group mb-2">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">SIMPAN</button>
        </div>
    </div>
    </form>
</div>