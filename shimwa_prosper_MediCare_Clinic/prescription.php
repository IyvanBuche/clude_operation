<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <?php
    include "header.php";
    ?>
    <div class="new_patient">
        <h3>appointment</h3>
        <button>
            <a href="appointment_add.php">add priscription</a>
        </button>

        <a style="color: white; border: 1px solid black; padding: 9px; background: #000; border-radius: 5px;" href=""
            onclick="print()">print</a>

    </div>

    <table border="1">
        <tr>
            <td class="head">Appointment Id</td>
            <td class="head">Patient</td>
            <td class="head">Doctor</td>
            <td class="head">Date</td>
            <td class="head">Time</td>
            <td class="head">Update</td>
            <td class="head">Delete</td>
        </tr>
        <?php
        $presription = mysqli_query($conn, "SELECT * FROM priscription INNER JOIN patient ON priscription.PatientId=patient.PatientId INNER JOIN doctor ON priscription.DoctorId=doctor.DoctorId");
        while ($row = mysqli_fetch_assoc($presription)) {
        ?>

            <tr>
                <td class="head2">
                    <?php echo $row['priscriptionId'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['FullName'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['Name'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['Date'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['Time'] ?>
                </td>
                <td class="head"><a onclick="return confirm('are you sure update priscription ?')"
                        href="appointment_update.php?id=<?php echo $row['AppointmentId'] ?>">update</a></td>
                <td class="head"><a onclick="return confirm('are you sure delete this priscription ?')"
                        href="appointment_delete.php?id=<?php echo $row['AppointmentId'] ?>">delete</a></td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>