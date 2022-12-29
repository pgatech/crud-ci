<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center" style="margin-top: 18vh;">
                <div class="card" style="width: 32rem;">
                <h5 class="card-header">Create Account</h5>
                    <div class="card-body">
                    <form>
                            <div class="form-group">
                                <label for="Name">Full Name</label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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


