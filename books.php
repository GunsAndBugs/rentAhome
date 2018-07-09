<?php

    session_start();
    
    if( isset($_POST['adid']) &&  isset($_SESSION['id']) ){
        echo "oka";
        $adid = $_POST['adid'];
        $id = $_SESSION['id'];
        $owner = $_POST['ownerid'];
        $conn = new mysqli( "localhost","root","","db_rentahome" );
        
            if( $conn->connect_error ){  echo "SERVER CAN NOT BE CONNECTED,TRY AGAIN.</br>"; die();  }
        $sql = "INSERT INTO booked (userid , adid,ownerid) VALUES ('$id','$adid','$owner') ";
        if( $conn->query($sql) == TRUE ) echo "booked";
        else echo "notbooked";
    }

?>


