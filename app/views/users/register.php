
<section id="registerSection">
    <form action="<?php echo URLROOT;?>users/register" method="post" onsubmit="return formValidation()">
        <div class="row bg-white justify-content-center py-5 border-2">
            <div class="col-md-4 shadow border-2 py-3">
                <div class="col-12">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" minlength="2" maxlength="40" required>
                    <span class="invalid"></span>
                </div>
                <div class="col-12">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
                    <span class="invalid"><?php echo $data['email_err'] ?></span>
                </div>
                <div class="col-12">
                    <label for="password">Passowrd *</label>
                    <input type="password" id="password" name="password" placeholder="Password" minlength="6" required>
                    <span class="invalid"></span>
                </div>
                <div class="col-12">
                    <label for="confirm_passowrd">Confirm Passowrd *</label>
                    <input type="password" id="confirm_passowrd" name="confirm_passowrd" minlength="6" placeholder="Confirm Passowrd" required>
                    <span class="invalid"></span>
                </div>
                <div class="col-md-12 p-3">
                    <div class="row justify-content-between">
                        <input type="submit" class="btn text-white bg-green" value="Register">
                        <a href="login" class="lead p-1">
                             Have an account? Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<script>
   
function formValidation() {

    let nameField = getNode("registerSection", "input[name='name']")
    let emailField = getNode("registerSection", "input[name='email']")
    let passwordField = getNode("registerSection", "input[name='password']")
    let confirm_passwordField = getNode("registerSection", "input[name='confirm_passowrd']")
    let invalid = getClassName("invalid")

    if(passwordField.value != confirm_passwordField.value){
        invalid[2].innerHTML = "Passwords do not matc!"
        invalid[3].innerHTML = "Passwords do not matc!"

        return false;
    }

    return true;
}
</script>