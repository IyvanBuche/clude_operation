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
        <h3>PATIENT</h3>
        <button>
            <a href="patient_add.php">add patient</a>
        </button>

        <a style="color: white; border: 1px solid black; padding: 9px; background: #000; border-radius: 5px;" href="" onclick="print()">print</a>

    </div>

    <table border="1">
        <tr>
            <td class="head">Patient_Id</td>
            <td class="head">FullName</td>
            <td class="head">Gender</td>
            <td class="head">Date Of Birth</td>
            <td class="head">Update</td>
            <td class="head">Delete</td>
        </tr>
        <?php
        $patient = mysqli_query($conn, "SELECT * FROM patient");
        while ($row = mysqli_fetch_assoc($patient)) {
        ?>

            <tr>
                <td class="head2"><?php echo $row['PatientId'] ?></td>
                <td class="head2"><?php echo $row['FullName'] ?></td>
                <td class="head2"><?php echo $row['Gender'] ?></td>
                <td class="head2"><?php echo $row['DateOfBirth'] ?></td>
                <td class="head"><a onclick="return confirm('are you sure update patient ?')" href="patient_update.php?id=<?php echo $row['PatientId'] ?>">update</a></td>
                <td class="head"><a onclick="return confirm('are you sure delete this Patient ?')" href="patient_delete.php?id=<?php echo $row['PatientId'] ?>">delete</a></td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>