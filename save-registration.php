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
        <main>
            <?php
            // Include config file
            require_once "connect.php";
            $password = trim($_POST["password"]);
            $confirm_password = trim($_POST["confirm_password"]);
            $username = trim($_POST["username"]);
            $error = "";


            // Check input errors before inserting in database
            if (!empty($username) && !empty($password) && $confirm_password == $password) {

                // Prepare an insert statement
                $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";

                if ($stmt = $db->prepare($sql)) {
                    // Bind variables to the prepared statement as parameters
                    $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                    $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

                    // Set parameters
                    $param_username = $username;
                    $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

                    // Attempt to execute the prepared statement
                    if ($stmt->execute()) {
                        // Redirect to login page
                        header("location: login.php");
                    } else {
                        $error =  "Something went wrong. Please try again later.";
                    }
                    // Close connection
                    $stmt->closeCursor();
                }
            } else {
                $error = "Please provide valid login name and password!";
            }
            echo "<p>$error</p>"
            ?>
            <a href="register.php"> Go Back </a>
        </main>
        <footer>
            <p> &copy; 2020 COMP1006 - Lab 9 </p>
        </footer>
    </div>
</body>

</html>