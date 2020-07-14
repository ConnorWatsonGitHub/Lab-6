<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COMP1006 - Lab 9 - Summer 2020 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1> COMP1006 - Lab Nine</h1>
            <nav>
                <a href="index.html" class="btn btn-dark">Home</a>
                <a href="view.php" class="btn btn-dark">View Data</a>
                <a href="login.php" class="btn btn-dark">Log In</a>
                <a href="logout.php" class="btn btn-dark">Log Out</a>
                <a href="register.php" class="btn btn-dark">Sign Up</a>
            </nav>
        </header>
        <main class="container">
            <h1>Sign Up</h1>
            <p>Please fill this form to create an account.</p>
            <form action="save-registration.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p>Already have an account? <a href="login.php">Log in here</a>.</p>

            </form>
        </main>
        <footer>
            <p> &copy; 2020 COMP1006 - Lab 9 </p>
        </footer>
    </div>
</body>
</html>