<?php
include "connect.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN MEDICARE</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <form method="POST">

        <div class="all_label">
            <h1>MEDI<span>CARE</span> LOGIN</h1>
            <label>NAME </label>
            <br><br>
            <input type="text" name="name" required>
            <br><br>
            <label>password</label>
            <br><br>
            <input type="password" name="password" required>
            <br><br>
            <div class="btn">
                <input type="submit" name="login" value="login">
            </div>
            <p>Don't have account create you account?<a href="signup.php">signup<a></p>
        </div>
    </form>

</body>

</html>
<?php

if (isset($_POST['login'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];

    $login = mysqli_query($conn, "SELECT * FROM doctor WHERE Name='$name' AND Password='$password'");

    if (mysqli_num_rows($login) > 0) {

        $_SESSION['name'] = $name;

        echo "
        <script>
            alert('DOCTOR LOGIN SUCCESSFULY $name ');   
            window.location.assign('dashboard.php');
        </script>
        ";
    } else {
        echo "
        <script>
            alert('DOCTOR NOT LOGIN');
        </script>
        ";
    }
}
?>