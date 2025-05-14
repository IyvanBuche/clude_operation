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
            <h1>ADDING appointment</h1>
            Patient :   
            <select name="patient">
                <?php
                $patient = mysqli_query($conn, "SELECT * FROM patient");
                while ($row = mysqli_fetch_assoc($patient)) {
                ?>

                    <option value="<?php echo $row['PatientId'] ?>"><?php echo $row['FullName'] ?></option>

                <?php } ?>
            </select>
            <br><br>
            Doctor :

            <select name="doctor">
                <?php
                $doctor = mysqli_query($conn, "SELECT * FROM doctor");
                while ($row = mysqli_fetch_assoc($doctor)) {
                ?>

                    <option value="<?php echo $row['DoctorId'] ?>"><?php echo $row['Name'] ?></option>

                <?php } ?>
            </select>
            <br><br>
            Date : <input typ e="date" name="date" required>
            <br><br>
            Time : <input type="time" name="time" required>
            <br><br>
            <div class="btn">
                <input style="height: 40px; width: 100px;" type="submit" name="add_appointment" value="add appointment"
                    required>
                <button><a style="color: white;" href="appointment.php">Back</a></button>
            </div>
        </div>

    </form>

</body>

</html>