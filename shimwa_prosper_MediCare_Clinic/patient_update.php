<?php
include "connect.php";

$id = $_GET['id'];

$select = mysqli_query($conn, "SELECT * FROM patient WHERE PatientId='$id'");
$data = mysqli_fetch_assoc($select);
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
            <h1>UPDATE PATIENT</h1>
            FULLNAME : <input type="text" name="fullname" value="<?php echo $data['FullName'] ?>" required>
            <br><br>
            Gender : <select name="gender" value="<?php echo $data['Gender'] ?>">
                <option value="male">
                    MALE
                </option>
                <option value="female">
                    FEMALE
                </option>
            </select>
            <br><br>
            DATE OF Birth : <input type="date" name="date" value="<?php echo $data['DateOfBirth'] ?>">
            <br><br>
            <div class="btn">
                <input style="width: 110px; height: 40px;" type="submit" name="update_patient" value="update patient"
                    required>
            </div>
        </div>

    </form>

</body>

</html>
<?php
if (isset($_POST['update_patient'])) {

    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $date_ofBirth = $_POST['date'];

    $update = mysqli_query($conn, "UPDATE patient 
    SET FullName= '$fullname' ,Gender= '$gender', DateOfBirth= '$date_ofBirth' WHERE PatientId='$id' ");

    if ($update) {
        echo "
        <script>
        alert('patient updated');
        window.location.assign('patient.php');
        </script>
        ";
    } else {
        echo "
        <script>
            alert('patient not update');
        </script>
        ";
    }
}
?>