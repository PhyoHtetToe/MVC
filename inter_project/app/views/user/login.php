<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>
<img src=" <?php echo URLROOT . "assets/imgs/plata.jpg" ?> " alt="">


<div class="container-fluid  w-50">
    <div class="containter my-5">
        <div class="col-md-m8">
            <div class="card bg-light p-5">
                <!-- Login Start  -->
                <?php flash('register_success'); ?>
                <h1 class="text-center" style="color:#d88b5d;">Login To Order</h1>
                <form action=" <?php URLROOT . '/user/login' ?> " method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control <?php echo !empty($data['email_err']) ? 'is-invalid' : '';  ?>" id="email" aria-describedby="emailHelp" placeholder="Put Your Email Here" name="email">
                        <span class="text-danger"><?php echo !empty($data['email_err']) ? $data['email_err'] : ''; ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control  <?php echo !empty($data['password_err']) ? 'is-invalid' : '';  ?>" id="password" placeholder="Put Your Password Here" name="password">
                        <span class="text-danger"><?php echo !empty($data['password_err']) ? $data['password_err'] : ''; ?></span>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me?</label>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo URLROOT . 'user/register' ?>" style="width:fit-content;">Created Account?</a>
                        <div class="">
                            <button class="btn btn-outline-secondary">Cancle</button>
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
                <!-- Login End  -->
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . "/views/inc/footer.php"; ?>