<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center" style="margin-top: 25vh;">
                <div class="card" style="width: 24rem;">
                <h5 class="card-header">Login Account</h5>
                    <div class="card-body">
                    <!-- Start Flash Notifications -->
                    <?php if ($this->session->flashdata('register')) : ?>                   
                            <div class="alert alert-success" role="alert">
                               <small> Anda telah <strong>berhasil</strong> <?php echo $this->session->flashdata('register'); ?></small>
                            </div>
                        <?php endif;?>
                        
                        <?php if($this->session->flashdata('msg')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <small>Login <?php echo $this->session->flashdata('msg');?> Incorrect. Please try again.</small>
                            </div>
                        <?php endif;?>
                    <!-- End Flash Notifications -->
                    <form action="<?= base_url('auth');?>" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?= set_value('email'); ?>">
                                <small class="text-card text-danger"><?php echo form_error('email');?></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 float-right">Sign In</button>
                        </form>
                        <div class="row">
                            <small><a href="#" class="text-card">Forgot Password?</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center mt-3">
                <p>Dont have an account? <a href="<?= base_url('auth/registration');?>">Register Now</a></p>
            </div>    
        </div>
    </div>
</div>


