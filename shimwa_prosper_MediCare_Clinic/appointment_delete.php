<?php
include "connect.php";

$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM appointment WHERE AppointmentId ='$id'");

if ($delete) {
    echo "
    <script>
    alert('appointment deleted succesfuly');
    window.location.assign('appointment.php');
    </script>
    ";
} else {
    echo "
    <script>
    alert('appointment deleted succesfuly');
    </script>

    ";
}
