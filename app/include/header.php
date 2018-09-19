
<?php
require_once('../config/db_connect.php');

session_start();
if(!isset($_SESSION['app']) && (!isset($_SESSION['role_session'])))
{
    echo " <script> window.location.href='../index.php';  </script>";
    exit();
}
elseif($_SESSION['role_session'] !="User")
{
    echo " <script> window.location.href='../index.php';  </script>";
    exit();
}
else{
    $session_id=$_SESSION['User'];
    $query=$conn->query("SELECT * FROM users WHERE username = '$session_id'");
    $row=mysqli_fetch_assoc($query);
    $fname=$row['first_name'];
    $sname=$row['last_name'];

    $fullname=$fname.' '.$sname;
    $id=$row['user_id'];
    $user=$row['username'];
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Materia - Admin Template">
    <meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
    <meta name="author" content="solutionportal">
    <!-- <base href="/"> -->

    <title>User Details</title>

    <!-- Icons -->
    <script src="../scripts/vendors.js"></script>

    <script src="../../../cdn-cgi/apps/head/aWgZFzIn5ln8hauTCmfEvTQEy2Q.js"></script><link rel="stylesheet" href="../fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css">

    <!-- sweetalert -->
    <link rel="stylesheet" href="../styles/swal2/sweetalert2.min.css">
    <script src="../styles/swal2/sweetalert2.min.js"></script>

    <!-- plugins -->
    <link rel="stylesheet" href="../styles/plugins/c3.css">
    <link rel="stylesheet" href="../styles/plugins/waves.css">
    <link rel="stylesheet" href="../styles/plugins/perfect-scrollbar.css">


    <!-- Css/Less Stylesheets -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/main.min.css">

    <!--- CSS to process datables  -->
    <link rel="stylesheet" href="../styles/datatables/jquery.dataTables.min.css">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

    <!-- Match Media polyfill for IE9 -->
    <!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]-->

<style>
    .required,.error{
        color: red;
    }
</style>
</head>
<body id="app" class="app off-canvas">

<!-- header -->
<header class="site-head" id="site-head">
    <ul class="list-unstyled left-elems">
        <li>
            <a href="javascript:;" class="nav-trigger ion ion-drag"></a>
        </li>

    </ul>

    <ul class="list-unstyled right-elems">
        <!-- profile drop -->
        <li class="profile-drop hidden-xs dropdown">
            <a href="javascript:;" data-toggle="dropdown">
                <img src="" alt="User Pic">
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="../logout.php"><span class="ion ion-power">&nbsp;&nbsp;</span>Logout</a></li>
            </ul>
        </li>

        <!-- sidebar contact -->
        <li class="floating-sidebar">
            <a href="javascript:;">
                <?php echo $fullname;?>
            </a>

        </li>

    </ul>

</header>