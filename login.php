<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User login and registration</title>
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
        
        <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login Here</h2>
            <form action="validation.php" method="post">
            <div class="form-group">
                <label>UserName</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            </form>
       </div>

            <div class="col-md-6 login-right">
            <h2>Register Here</h2>
            <form action="registration.php" method="post">
            <div class="form-group">
                <label>UserName</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="mail" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>PhoneNumber</label>
                <input type="text" name="phonenumber" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                <button type="submit" class="btn btn-primary">register</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>