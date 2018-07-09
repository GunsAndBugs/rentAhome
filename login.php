<?php
    
    session_start();
    
    if ( isset($_POST['email']) && isset( $_POST['pass1'] ) ){
        
            $email = $_POST['email'];
            $pass1 = md5($_POST['pass1']);

            $conn = new mysqli( "localhost","root","","db_rentahome" );

            $sql = "SELECT * FROM `tb_userinfo` WHERE email='$email' AND password='$pass1'";

            $result = $conn->query($sql);
            
            if( $result->num_rows>0 ){
                $row = $result->fetch_assoc();
                //echo $row['name']." ".$row['status'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['status'] = $row['status'];
                $_SESSION['propic'] = $row['propicurl'];
                $_SESSION['rating'] = $row['rating']/$row['votes'];
            }
            else echo "NOT LOGGED IN";



    }
    if( isset($_SESSION['id']) ) header('Location: http://localhost:8079/renthome/profile.php');



?>

