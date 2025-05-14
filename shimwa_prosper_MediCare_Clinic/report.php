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
        <h3>Report</h3>
        <!-- <button>
            <a href="appointment_add.php">add appointment</a>
        </button> -->

        <a style="color: white; border: 1px solid black; padding: 9px; background: #000; border-radius: 5px;" href=""
            onclick="print()">print</a>

    </div>

    <table border="1">
        <tr>
            <td class="head">Patient Id</td>
            <td class="head">Patient Name</td>
            <td class="head">Gender</td>
            <td class="head">Date Of Birth</td>
            <td class="head">Doctor Name</td>
            <td class="head">Department</td>
            <td class="head">AppointmentDate</td>
            <td class="head">Time</td>
            <td class="head">MedicineName</td>
            <td class="head">Dosage</td>
            <td class="head">PrescriptionDate</td>
        </tr>
        <?php
        $appointment = mysqli_query($conn, "SELECT patient.PatientId, patient.FullName, patient.Gender, patient.DateOfBirth, doctor.Name AS doctorName, doctor.Department, appointment.Date AS appointmentDate, appointment.Time, prescription.MedicineName, prescription.Dosage, prescription.Date AS prescriptionDate FROM patient LEFT JOIN appointment ON patient.PatientId=appointment.PatientId INNER JOIN doctor ON appointment.DoctorId=doctor.DoctorId LEFT JOIN prescription ON prescription.PatientId=patient.PatientId; ");
        while ($row = mysqli_fetch_assoc($appointment)) {
        ?>

            <tr>
                <td class="head2">
                    <?php echo $row['PatientId'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['FullName'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['Gender'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['DateOfBirth'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['doctorName'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['Department'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['appointmentDate'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['Time'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['MedicineName'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['Dosage'] ?>
                </td>
                <td class="head2">
                    <?php echo $row['prescriptionDate'] ?>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>