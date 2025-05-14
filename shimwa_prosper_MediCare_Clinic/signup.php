<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP MEDICARE</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <form method="POST">
        <div class="all_label">
            <h1>MEDI<span>CARE</span> SIGNUP</h1>
            <label>NAME</label>
            <br><br>
            <input type="text" name="name" required>
            <br><br>
            <label>DEPARTMENT</label>
            <br><br>
            <input type="text" name="department" required>
            <br><br>
            <label>password</label>
            <br><br>
            <input type="password" name="password" required>
            <br><br>
            <div class="btn">
                <input type="submit" name="signup" value="signup">
            </div>
            <p>Arleady have account account? <a href="login.php">Login<a></p>
        </div>
    </form>

</body>

</html>

<?php
if (isset($_POST['signup'])) {

    $name = $_POST['name'];
    $department = $_POST['department'];
    $password = $_POST['password'];

    $insert = mysqli_query($conn, "INSERT INTO doctor(Name,Department,Password) 
    VALUES('$name','$department','$password')");

    if ($insert) {
        echo "
        <script>
        alert('DATA INSERT SUCCESSFULY');
        window.location.assign('login.php');
        </script>
        ";
    } else {
        echo "
        <script>
            alert('DATA NOT INSERT');
            window.location.assign('signup.php');
        </script>

        ";
    }
}

?>