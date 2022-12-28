<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data mahasiswa <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        </div>
    </div>
    <?php endif;?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url();?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <!-- Searching Data -->
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keywords">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Searching Data -->

    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Daftar Mahasiswa</h3>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data mahasiswa tidak ditemukan!
                </div>
            <?php endif;?>
            <ul class="list-group">
                <?php foreach($mahasiswa as $mhs) : ?>
                    <li class="list-group-item detail">
                        <?php echo $mhs['nama'];?>
                        <a href="<?php echo base_url();?>mahasiswa/hapus/<?= $mhs['id'];?>" class="btn btn-danger btn-sm float-right ms-3" onclick="return confirm('Yakin diHapus?');">Hapus</a>
                        <a href="<?php echo base_url();?>mahasiswa/update/<?= $mhs['id'];?>" class="btn btn-warning btn-sm float-right">Update</a>
                        <a href="<?php echo base_url();?>mahasiswa/detail/<?= $mhs['id'];?>" class="btn btn-primary btn-sm float-right">Detail</a>
                      
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>