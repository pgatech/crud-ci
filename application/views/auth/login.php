<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center" style="margin-top: 25vh;">
                <div class="card" style="width: 22rem;">
                <h5 class="card-header">Login Account</h5>
                    <div class="card-body">
                    <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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


