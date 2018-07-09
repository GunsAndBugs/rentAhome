<?php



 $td = "propic/";
 $tf = $td. basename($_FILES["propic"]["name"]);
 echo $tf;
 echo "</br>";
 if (file_exists($tf)) {
    echo "Sorry, propic name already exists.";
    die();
 }
  if (!move_uploaded_file($_FILES["propic"]["tmp_name"], $tf)) {
      echo "propic can not be uploaded";
  }
     


/////////////////////////////////////////////////////////////
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $nid = $_POST['nid'];

    function simplify( $str ){
        $str = trim($str);
        $str = stripslashes($str);
        $str = htmlspecialchars($str);
        return $str;
    }
    
    $name = simplify( $name );
    $email = simplify( $email );
    $pass1 = simplify($pass1);
    $pass2 = simplify($pass2);
    
    //validate input data:

    $nameOK = 0;
    $emailOK = 0;
    $passOK = 0;

    if( empty($email) ) echo "email field is empty</br>";
    else{
        if( !filter_var( $email,FILTER_VALIDATE_EMAIL ) ) ;
        else $emailOK = 1;
    }

    if( empty($name) ) echo "name required</br>";
    else{
        if( preg_match("/[^a-zA-Z ]/",$name) ) ;
        else{
            $nameOK = 1;
        }
        echo"</br>";
    }

    if( empty($pass1) || empty($pass2) ) echo "empty password</br>";
    else{
        if( $pass1 != $pass2 )  ;
        else $passOK = 1;
    }


    if( $nameOK==1 && $passOK==1 && $emailOK==1 ){
        
        include('dblib.php' );
        $db = new dbclass();
        $db->dbconnect("localhost","root","","db_rentahome");
        $db->changetable("tb_userinfo");
        $id = $db->addrow();
        $db->updtRow( $id,"name",$name );
        $db->updtRow( $id,"email",$email );
        $db->updtRow( $id,"password",md5($pass1) );
        $db->updtRow( $id , "status",0 );
        $db->updtRow( $id,"nid", $nid );
        $db->updtRow( $id , "propicurl","/".$tf );
        



    }
    else{
        if( $nameOK==0 ) echo "Invalid name!</br>";
        if( $emailOK==0 ) echo "Invalid email</br>";
        if( $passOK ==0 ) echo "Password mismatch!</br>";
    }




    
    

?>