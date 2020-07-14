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
        <main class="container login">
            <h1> Please Log In </h1>
            <form action="validate.php" method="post">
                <fieldset class="form-group">
                    <label for="username" class="col-sm-2">User Name:</label>
                    <input name="username" type="text" class="form-control" id="username" required>
                </fieldset>
                <fieldset class="form-group">
                    <label for="password" class="col-sm-2">Password:</label>
                    <input name="password" required type="password" class="form-control">
                </fieldset>
                <input type="submit" value="Log In!" name="submit" class="btn btn-success">
            </form>
            <a href="register.php"> Not a Member Yet? Sign Up Now </a>
        </main>
        <footer>
            <p> &copy; 2020 COMP1006 - Lab 9 </p>
        </footer>
    </div>
</body>

</html>