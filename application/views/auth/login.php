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
</head>
<body>
<div class="login-box neon">
    <h1>Bei's Cat House</h1>
    <h2 style="text-align: center;">Login</h2>
        <form method="POST" action="<?= site_url('auth/login_process') ?>">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username">
                <label for="username"></label>
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password">
                <label for="password"></label>
            </div>
            <button type="submit" class="btn" name="login">Login</button> 
        </form>
        Belum punya akses? <a href="<?= site_url('auth/signup') ?>">Klik disini.</a>
</div>
</body>
</html>