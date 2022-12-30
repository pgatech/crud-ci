<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center" style="margin-top: 18vh;">
                <div class="card" style="width: 32rem;">
                <h5 class="card-header">Create Account</h5>
                    <div class="card-body">
                        <!-- Flash Notifications -->
                        <?php if ($this->session->flashdata('flash')) : ?>                   
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Anda telah <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?> Silahkan untuk Login!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif;?>
                    <form action="" method="POST">
                            <div class="form-group">
                                <label for="Name">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?= set_value('name'); ?>">
                                <small class="text-card text-danger"><?php echo form_error('name');?></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?= set_value('email'); ?>">
                                <small class="text-card text-danger"><?php echo form_error('email');?></small>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    <small class="text-card text-danger"><?php echo form_error('password1');?></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword2">Confirm Password</label>
                                    <input type="password" name="password2" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                    <small class="text-card text-danger"><?php echo form_error('password2');?></small>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 float-right">Register Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center mt-3">
                <p>Already have an account? <a href="<?= base_url();?>">Login Now</a></p>
            </div>    
        </div>
    </div>
</div>


