<?php
include "connect.php";
session_start();
session_destroy();

echo "
<script>
alert('Doctor logout System');
window.location.assign('login.php');
</script>
";
