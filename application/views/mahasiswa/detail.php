<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $mahasiswa['nama'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $mahasiswa['nim'];?></h6>
                <br>
                <p class="card-text">Email : <?php echo $mahasiswa['email'];?></p>
                <p class="card-text">Tanggal Lahir : <?php echo $mahasiswa['tgl_lahir'];?></p>
                <p class="card-text">Jurusan : <?php echo $mahasiswa['jurusan'];?></p>
                <a href="<?php echo base_url();?>mahasiswa" class="btn btn-primary">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>  