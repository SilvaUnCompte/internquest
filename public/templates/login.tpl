<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/book.png" />

    <link href="../assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/styles/generics/header/header.css">
    <link rel="stylesheet" href="../public/styles/generics/footer/footer.css">
    <title>{$title}</title>
</head>

<link rel="stylesheet" href="../public/styles/login/login.css">


<a id="home" href="index.php">
    <ion-icon name="home-outline" id="home-outline"></ion-icon>
    <ion-icon name="home" id="home-full"></ion-icon>
</a>

<section id="section-core">
    <div class="form-box">
        <div class="form-value">
            <form action="">
                <h2>Login</h2>
                <div class="input-box">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" required placeholder=" ">
                    <label for="">Email</label>
                </div>
                <div class="input-box">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required placeholder=" ">
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <a href="#">Forget Password?</a>
                </div>
                <input type="submit" value="Login">
                <div class="register">
                    <p>Don't have an account? <a href="register.html">Call your pilot</a></p>
                </div>
            </form>
        </div>
    </div>
</section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>