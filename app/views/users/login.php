<section id="loginSection">
    <form action="<?php echo URLROOT;?>users/login" method="post">
        <div class="row bg-white justify-content-center py-5 border-2">
            <div class="col-md-4 shadow border-2 py-3">
                <div class="col-12">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
                    <span class="invalid"><?php echo $data['email_err'] ?></span>
                </div>
                <div class="col-12">
                    <label for="password">Passowrd *</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <span class="invalid"><?php echo $data['password_err'] ?></span>
                </div>
                <div class="col-md-12 p-3">
                    <div class="row justify-content-between">
                        <input type="submit" class="btn text-white bg-green" value="Login">
                        <a href="register" class="lead p-1">
                            No account? Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

</section>
