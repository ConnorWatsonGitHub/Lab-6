<!DOCTYPE html>
<html lang="en">
<?php require_once('auth.php'); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COMP1006 - Lab 9 - Summer 2020 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&family=Quicksand&display=swap" rel="stylesheet">
</head>

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
        try {
            //connect to our db 
            require_once('connect.php');

            //set ud 
            $tableName = 'persons';
            //set up SQL statement 
            $sql = "SELECT * FROM $tableName;";

            //prepare the query 
            $statement = $db->prepare($sql);

            //execute 
            $statement->execute();

            //use fetchAll to store the results 
            $records = $statement->fetchAll();

            // echo out the top of the table 

            echo "<table class='table'><thead class='thead-dark'><th>First Name</th><th>Last Name</th><th>Email</th><th> Delete </th></thead><tbody>";

            foreach ($records as $record) {
                echo "<tr><td>" . $record['first_name'] . "</td><td>" . $record['last_name'] . "</td><td>" . $record['email'] . "<td><a href='delete.php?id=" . $record['user_id'] . "'> Delete </a></td></tr>";
            }
            echo "</tbody></table>";

            $statement->closeCursor();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p> $error message </p>";
        }
        ?>
    </main>

    <footer>
        <p> &copy; 2020 COMP1006 - Lab 9 </p>
    </footer>
</div>