<?php

session_start();
if(isset($_SESSION['User']))
{
    session_destroy();
    echo "<script>window.location.href = 'index.php'; </script>";
    exit;
}
?>