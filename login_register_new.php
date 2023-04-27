<?php include("navbar.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login / Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="container" style="padding:150px 0px;">
        <form id="registration_form" style="display:none;max-width:350px;margin:auto;" method="post" action="register.php" >
            <h2>Registration</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="confirm_password">
            </div>
            <button type="submit" class="btn btn-success">Register</button>
        </form>
        <form method="post" action="login.php" id="login_form" style="max-width:350px;margin:auto;">
            <h2>User Login</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
            <div class="btn btn-info" id="not_reg" >Not Registerd? Create an account</div>
        </form>
    </div>
    <script>
        var not_reg = document.getElementById("not_reg");
        var login_form = document.getElementById("login_form");
        var registration_form = document.getElementById("registration_form");
        var register = document.getElementById("register");
        // var password = document.getElementById("password");
        // var confirmpassword = document.getElementById("confirmpassword");

        not_reg.onclick = function() {
            registration_form.style.display = "block";
            login_form.style.display = "none";
            not_reg.style.display = "none";
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
<?php include("footer.php");
