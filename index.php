<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registration</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body style="background-color: darkslateblue">
<div style="margin-top: 10vw" class="container">
    <div style="background-color: beige" class="row">
        <div class="col-md-6 col-6 col-lg-6 col-xl-6">
            <h2>Login Here</h2>
            <form action="validation.php" method="post">
                <div class"form-group">
                <input class="form-control" required placeholder="Username" name="lname" type="text"> <br><br>
                <input  class="form-control" placeholder="Password" required type="password" name="lpass"> <br><br>
                <input class=btn-secondary value="Login" type="submit">
        </div>
        </form>
    </div>
    <div style="background-color: white" class="col-md-6 col-6 col-lg-6 col-xl-6">
        <h2>Register Here</h2>
        <form action="registration.php" method="post">
            <div class"form-group">
            <input class="form-control" required placeholder="Username" type="text" name="rname"> <br><br>
            <input  class="form-control" placeholder="Password" required type="password" name="rpass"> <br><br>
            <input class=btn-secondary value="Register" type="submit">
    </div>
    </form>
</div>
</div>
</div>
</body>
</html>
