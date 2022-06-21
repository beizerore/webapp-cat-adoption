<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="<?= base_url() ?>/assets/custom/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>s
<body>
<div class="login-box neon">
    <h1>Bei's Cat House</h1>
    <h2 style="text-align: center;">Sign Up</h2>
        <form method="POST" action="<?= base_url('auth/signup') ?>">
           <div class="textbox">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" name="email">
            </div>

            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password">
            </div>

            <div class="textbox">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Confirm Password" name="cpassword">
            </div>
            <input type="hidden" name="level" value="2">
            <input type="submit" class="btn" value="Sign Up"> 
        </form>
        Sudah Punya Akun? <a href="<?= base_url('auth/login') ?>">Klik disini.</a>
</div>
</body>
</html>