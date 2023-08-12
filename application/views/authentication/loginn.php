<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 login-box">
            <div class="card">
                <div class="card-body">
                    <div class="login-logo">
                        <a href="http://localhost/ci3login/"><b>ADMIN</b></a>
                    </div>
                    <div class="login-box-msg">Masuk Dengan Email & Password Anda</div>
                    <form method="post" action="<?php echo base_url('auth/login'); ?>" role="login">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="form-check">
                                <!-- <input type="checkbox" name="remember_code" value="1" id="remember_code" class="form-check-input" /> -->
                                <label class="form-check-label" for="remember_code"> <?php echo form_checkbox('remember_code', '1', false, 'id="remember_code"', 'class="form-check-input"'); ?>Ingat Saya</label>
                            </div>
                        </div>
                        <br>
                        <button type="submit" name="submit" value="login" class="btn btn-sm btn-primary"><i class="fa fa-sign-in-alt" aria-hidden="true"></i> Masuk</button>
                    </form>
                    <hr>
                    <div class="forgot-password-link">
                        <a href="<?php echo base_url('auth/forgot_password'); ?>">Lupa Kata Sandi?</a><br>
                        <a href="<?php echo base_url('auth/register'); ?>">Daftar Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>