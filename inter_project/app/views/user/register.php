<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>
<img src=" <?php echo URLROOT . "assets/imgs/plata2.jpg" ?> " alt="">


<div class="container-fluid w-50">
    <div class="containter my-5">
        <div class="col-md-m8">
            <div class="card bg-light p-5">
                <!-- Register Start  -->
                <h1 class="text-center" style="color:#d88b5d;">Register To Order</h1>
                <form action=" <?php URLROOT . '/user/register' ?> " method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control <?php echo !empty($data['name_err']) ? 'is-invalid' : '';  ?> " id="username" aria-describedby="emailHelp" placeholder="Put Your UserName Here" name="name">
                        <span class="text-danger"><?php echo !empty($data['name_err']) ? $data['name_err'] : ''; ?> </span>
                    </div>
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
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control  <?php echo !empty($data['confirm_password_err']) ? 'is-invalid' : '';  ?>" id="confirm_password" placeholder="Rewrite Your Password" name="confirm_password">
                        <span class="text-danger"><?php echo !empty($data['confirm_password_err']) ? $data['confirm_password_err'] : ''; ?> </span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo URLROOT . 'user/login' ?>" style="width:fit-content;">Already Register?,Please Login!!</a>
                        <div class="">
                            <button class="btn btn-outline-secondary">Cancle</button>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
                <!-- Register End  -->
            </div>
        </div>
    </div>
</div>
</div>