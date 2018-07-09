<?php
    
     $conn = new mysqli( "localhost","root","","db_rentahome" );
     if( $conn->connect_error ){  echo "SERVER CAN NOT BE CONNECTED,TRY AGAIN.</br>"; die();  }
     
     $adid = $_POST['adid'];
     $userid = $_POST['userid'];
     $sql = "UPDATE booked SET book_status=1 WHERE adid = '$adid' AND userid='$userid' ";
     if( $conn->query($sql) )  echo "success";
     else echo $conn->error;                                   

?>

