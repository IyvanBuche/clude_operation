<?php
include "connect.php";

session_start();

if (!isset($_SESSION['name'])) {
    echo "
    <script>
    alert('first doctor_name and doctor_department');
    window.location.assign('login.php');
    </script>
    ";
}
?>
<header>
    <h1>MEdi <span>Care</span></h1>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="patient.php">Patient</a>
        <a href="appointment.php">Appointment</a>
        <a href="prescription.php">Prescription</a>
        <a href="report.php">Report</a>
    </nav>
    <div class="btn">
        <button>
            <a onclick="return confirm('are you sure logout ?')" href="logout.php">logout</a>
        </button>
    </div>
</header>