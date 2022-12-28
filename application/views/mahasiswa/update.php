<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Update Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'];?>">
                        <small class="text-card text-danger"><?php echo form_error('nama');?></small>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" class="form-control" id="nim" value="<?= $mahasiswa['nim'];?>">
                        <small class="text-card text-danger"><?php echo form_error('nim');?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email'];?>">
                        <small class="text-card text-danger"><?php echo form_error('email');?></small>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?= $mahasiswa['tgl_lahir'];?>">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                        <?php foreach ($jurusan as $jrs) : ?>
                            <?php if ($jrs == $mahasiswa['jurusan']) : ?>
                                <option value="<?= $jrs;?>" selected><?= $jrs;?></option>
                            <?php else : ?>
                                <option value="<?= $jrs;?>"><?= $jrs;?></option>
                            <?php endif;?>

                        <?php endforeach;?>
                        </select>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary float-right">Update Data</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>