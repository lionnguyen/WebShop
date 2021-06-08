<!-- Register area-->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('./Includes/signup.inc.php');
}
?>
<section class="signup-form" id="register">
    <div class="row m-0">
        <div class="col-lg-8 offset-lg-2">
            <div class="text-center pd-5">
                <h1 class="login-title text-white font-rubik">Sign Up</h1>
                <p class="p-1 m-0 text-white font-rale">Sign up and enjoy additional features</p>
                <span class="text-white">I already have <a href="login-page.php" class="d-inline-block color-primary">Login</a></span>
            </div>
            <div class="d-flex justify-content-center">
                <form action="Includes/signup.inc.php" method="POST" id="reg-form">
                    <div class="form-row my-4">
                        <div class="col d-inline-block">
                            <input type="text" name="firstName" placeholder="First Name" class="form-control">
                        </div>
                        <div class="col d-inline-block">
                            <input type="text" name="lastName" placeholder="Last Name" class="form-control" >
                        </div>
                    </div>
                    <div class="col form-row my-4">
                        <div class="col">
                            <input type="text" name="email" placeholder="Email" class="form-control" >
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="text" name="uid" placeholder="User Name" class="form-control" >
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" name="pwd" placeholder="Password"  class="form-control" >
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" name="pwdRepeat" placeholder="Repeat Password" class="form-control" >
                        </div>
                    </div>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p class='error text-danger'>Please, Fill in all field!</p>";
                        } else if ($_GET["error"] == "invaliduid") {
                            echo "<p class='error text-danger'>Choose a proper username!</p>";
                        } else if ($_GET["error"] == "invalidemail") {
                            echo "<p class='error text-danger'>Choose a proper email!</p>";
                        } else if ($_GET["error"] == "passwordsdontmatch") {
                            echo "<p class='error text-danger'>Password doesn't match!</p>";
                        } else if ($_GET["error"] == "stmtfailed") {
                            echo "<p class='error text-danger'>Something went wrong, try again!</p>";
                        } else if ($_GET["error"] == "usernametaken") {
                            echo "<p class='error text-danger'>Username already taken!</p>";
                        } else if ($_GET["error"] == "none") {
                            echo "<p class='error text-danger'>You have signed up!</p>";
                        }
                    }
                    ?>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="agreement" class="form-check-input" required>
                        <label for="agreement" class="form-check-label text-white font-rale d-flex">I agree <a href="" class="color-primary"> &nbsp; term,condition, and policy</a> &nbsp;(*)</label>
                    </div>
                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- !Register area-->