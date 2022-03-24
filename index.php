<!-- html header -->
<?php require_once "includes/header.php";?>
<div class="container-login">
    <div class="title-login">
        <div class="title-logo">
            <h1><strong>UNLIMIT</strong></h1>
            <p>Welcome to communication and set task to do veryday to success in your future.</p>
        </div>
    </div>
    <div class="complate-to-login">
        <div class="login-create">
            <form action="pages/home.php" method="post" class="login-form">
                <h3>Login Account</h3>
                <input type="email" name="email-user" id="" placeholder="Email Address...">
                <input type="password" name="password-user" id="" placeholder="Password...">
                <input type="submit" value="Login">
                <div class="forgot-password">
                    <a href="">Forgot Password?</a>
                </div>
            </form>
            <hr>
            <div class="create-user">
                <a href="">Create New Account</a>
            </div>
        </div>
    </div>
</div>





<!-- html footer -->
<?php require_once "includes/footer.php";?>