<!-- Log-in area-->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('./Includes/login.inc.php');
}
?>
<section class="login-form" id="login-form">
    <div class="row m-0">
        <div class="col-lg-8 offset-lg-2">
            <div class="text-center pd-5">
                <h1 class="login-title text-white font-rubik">Login</h1>
                <p class="p-1 m-0 text-white font-rale">Login and enjoy additional features</p>
                <span class="text-white">Create a new account<a href="register-page.php" class="d-inline-block color-primary">&nbsp;Sign up</a></span>
            </div>
            <div class="d-flex justify-content-center">
                <form action="Includes/login.inc.php" method="POST">
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="text" name="name" placeholder="UserName/Email"  class="form-control">
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" name="pwd" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="submit">Log in</button>
                    </div>
                </form>
            </div>
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p class='error text-danger text-center'>Fill in all field!</p>";
                }
                else if($_GET["error"] == "wronglogin"){
                    echo "<p class='error text-danger text-center'>Incorrect login information!</p>";  
                }
            }
            
        ?>
        </div>
</section>
<!-- !Register area-->