<?php
        
        session_start();
        
        if(  isset($_POST['zip']) && isset($_POST['space']) && isset($_POST['cost']) && isset($_POST['avail']) && isset($_POST['des'])){
            $zip = ($_POST['zip']);
            $space=($_POST['space']);
            $cost=($_POST['cost']);
            $avail = ($_POST['avail']);
            $des = ($_POST['des']);
            $ownerid = $_SESSION['id'];
            //echo $des."</br>";

            $conn = new mysqli( "localhost","root","","db_rentahome" );
            if( $conn->connect_error ){  echo "SERVER CAN NOT BE CONNECTED,TRY AGAIN.</br>"; die();  }
            else{
                $sql = "INSERT INTO ads (zip,space,cost,available,Description,ownerid,status) 
                VALUES ('$zip','$space','$cost','$avail','$des','$ownerid','0') ";
                if( $conn->query($sql)==TRUE ) echo "<label style=\"color:rgb(117, 243, 6);\" >SUCCESSFUL</label></br>";
                else echo "<label style=\"color:red\" >FAILED</label> : ".$conn->error."</br>";
            }



        }



?>


