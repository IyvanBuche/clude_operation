<?php
include "connect.php";

$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM patient WHERE PatientId='$id'");

if ($delete) {
    echo "
    <script>
    alert('Patient deleted');
    window.location.assign('patient.php');
    </script>
    ";
} else {
    echo "
    <script>
    alert('Patient not deleted');
    // window.location.assign('pantient.php');
    </script>
    ";
}
