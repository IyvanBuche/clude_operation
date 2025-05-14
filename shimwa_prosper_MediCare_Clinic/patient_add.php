<?php
include "connect.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <?php include "header.php" ?>
    <form method="POST">
        <div class="all_label">
            <h1>ADDING PATIENT</h1>
            FULLNAME : <input type="text" name="fullname" required>
            <br><br>
            Gender : <select name="gender" requreid>
                <option value="male">
                    MALE
                </option>
                <option value="female">
                    FEMALE
                </option>
            </select>
            <br><br>
            DATE OF Birth : <input type="date" name="date">
            <br><br>
            <div class="btn">
                <input style="height: 40px; width: 100px;" type="submit" name="add_patient" value="add patient"
                    required>
                <button><a style="color: white;" href="patient.php">Back</a></button>
            </div>
        </div>

    </form>

</body>

</html>
<?php
if (isset($_POST['add_patient'])) {

    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $date_ofBirth = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO patient(FullName,Gender,DateOfBirth) 
    VALUES('$fullname','$gender','$date_ofBirth')");

    if ($insert) {
        echo "
        <script>
        alert('patient insert database');
        window.location.assign('patient.php');
        </script>
        ";
    } else {
        echo "
        <script>
            alert('patient not insert database');
            // window.location.assign('patient.php');
        </script>
        ";
    }
}
?>