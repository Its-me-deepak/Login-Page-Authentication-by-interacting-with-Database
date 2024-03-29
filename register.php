<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page!!</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="user_register.php" method="post">
            <h1>REGISTRATION</h1>
            <div class="input-box">
                <input type="text" name="EmailId" id="EmailId" placeholder="Email ID" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" name="UserName" id="UserName" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="Credentials" id="Credentials" placeholder="Password">
                <i class='bx bxs-lock'></i>
            </div>
          <!--  <div class="remember-me">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div> -->
            <button type="submit" class="btn">Register</button>
          <!--  <div class="register-link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div> -->
        </form>
    </div>
</body>
</html>