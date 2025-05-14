<?php
include "connect.php";
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
    <h1>DASHBOARD</h1>
    <div class="group">
        <div>
            <h3>patient</h3>
            <span>
                <?php
                $patient = mysqli_query($conn, "SELECT * FROM patient");
                echo mysqli_num_rows($patient);
                ?>
            </span>
        </div>

        <div>
            <h3>Appointment</h3>
            <span>
                <?php
                $appointment = mysqli_query($conn, "SELECT * FROM appointment");
                echo mysqli_num_rows($appointment);
                ?>
            </span>
        </div>

        <div>
            <h3>Prescription</h3>
            <span>
                <?php
                $prescription = mysqli_query($conn, "SELECT * FROM prescription");
                echo mysqli_num_rows($prescription);
                ?>
            </span>
        </div>

        <div>
            <h3>Doctor User</h3>
            <span>
                <?php
                $doctor = mysqli_query($conn, "SELECT * FROM doctor");
                echo mysqli_num_rows($doctor);
                ?>
            </span>
        </div>

    </div>

</body>

</html>