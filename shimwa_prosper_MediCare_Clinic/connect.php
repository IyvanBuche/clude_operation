<?php
$conn = mysqli_connect("localhost", "root", "", "medicare");

if ($conn) {
    // echo "
    // <script>
    // alert('database connected');
    // </script>
    // ";
} else {
    echo "
    <script>
    alert(database not connected);
    </script>
    ";
}
