<div class="register-box">
    <div class="register-logo">
        <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/'); ?>logo.png" class="img-fluid" width="200"><br><b>SISTEM ABSENSI<br>SMKN 1 CIMAHI</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <form action="<?= base_url('auth/registration') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full name" name="name" id="name" value="<?= set_value('name') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('name') ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="<?= set_value('username') ?>">
                    <div class=" input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('username') ?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password1" id="password1">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password1') ?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password" name="password2" id="password2">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->