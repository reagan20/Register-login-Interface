<?php
//Create account query

if(isset($_POST['submit'])){
    $first_name=mysqli_real_escape_string($conn,trim($_POST['first_name']));
    $last_name=mysqli_real_escape_string($conn,trim($_POST['last_name']));
    $email=mysqli_real_escape_string($conn,trim($_POST['email']));
    $role='User';
    $pass=mysqli_real_escape_string($conn,trim($_POST['password']));
    $pass=password_hash($pass, PASSWORD_DEFAULT);

        $check_user=$conn->query("SELECT * FROM users WHERE username='$email'");{
        $count=$check_user->num_rows;
        if($count==1){
            $alert="<div class='alert alert-warning'><button class='close' data-dismiss='alert'>&times;</button>SORRY!! Account already exist!!.</div>";
        }
        else{
            $stmt=$conn->query("INSERT INTO users(first_name,last_name,username,role,password) VALUES ('$first_name','$last_name','$email','$role','$pass')");
            if($stmt){
                $alert="<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Account successfully created.<a href='index'>Login Here</a></div>";
            }
            else{
                $alert="<div class='alert alert-warning'><button class='close' data-dismiss='alert'>&times;</button>Failed!! User account not created.</div>";
            }
        }
    }
}


//Login query
if(isset($_POST['login'])){
    $username=mysqli_real_escape_string($conn, trim($_POST['username']));
    $password=mysqli_real_escape_string($conn, trim($_POST['password']));
    $login=$conn->query("SELECT * FROM users WHERE username='$username'");
    $row=$login->fetch_array();
    $count=$login->num_rows;

    if($count==1){
        if(password_verify($password, $row['password'])){
            if($row['role']=="User"){
                $_SESSION['User']= $row['username'];
                $_SESSION['role_session']= $row['role'];
                echo " <script> window.location.href='app/index';  </script>";
            }
            elseif($row['role']=="Admin"){
                $_SESSION['Admin']= $row['username'];
                $_SESSION['role_session']= $row['role'];
                echo " <script> window.location.href='admin/index';  </script>";
            }
        }
        else{
            echo"<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button> Sorry!! Username or password incorrect!!</div>";
        }

    }
    else{
        echo"<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button> Sorry!! Account with such username does not exist.</div>";
    }
}


?>