<?php
    session_start();
    //echo $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Profile</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/renthome/profile.js"></script>
  
        <style>
           #adtab input , textarea{
                border-style: solid;
                margin: 2px;
                margin-left: 0px;
                border-color: gray;
                border-width: 1px;
                width: 350px;
                padding: 7px;
                font-size: 15px;
            }
           #adtab form{
                margin-top: 10%;
            }
        </style>

    </head>
    <body>
            
        <div class="container">
            
            <ul class="nav nav-tabs">
                <li class="active"><a href="#settings" data-toggle="tab"><?php echo $_SESSION['name'];?></a></li>
                
                <li><a href="#mysubtab" data-toggle="tab">Subscriptions</a></li>
                
                <li><a href="#submetab" data-toggle="tab">My subcribers</a></li>
                
                
                <li><a href="#adtab" data-toggle="tab">advertise</a></li>
            
            </ul>

            <div class="tab-content">
                
                 <div id="settings" class="tab-pane fade in active">
                        
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                      <div class="card-header"><?php echo $_SESSION['name'] ; ?></div>
                                      <div class="card-body">
                                        <img class="card-img-top" width="200px" height="200px" src=<?php echo "\"".$_SESSION['propic']."\"" ; ?> alt="Card image">
                                      </div> 
                                      <div class="card-footer">rating : <?php echo $_SESSION['rating'] ; ?></div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-1"></div>
                                
                                <div class="col-sm-8">
                                    <div class="panel-group">
                                     
                                    <?php 

                                        $conn = new mysqli( "localhost","root","","db_rentahome" );
                                        if( $conn->connect_error ){  echo "SERVER CAN NOT BE CONNECTED,TRY AGAIN.</br>"; die();  }
                                        
                                        $sql = "SELECT * FROM ads WHERE status=0";
                                        $result = $conn->query($sql);

                                        while( $row = $result->fetch_assoc() ){
                                           $userid = $_SESSION['id'];
                                           $adid = $row['adid'];
                                           $s = "SELECT * FROM booked WHERE book_status=0 AND userid='$userid' AND adid='$adid' ";
                                           $r = $conn->query($s);
                                           if( $r->num_rows>0 ) continue;
                                            echo"<div class=\"panel panel-default\">";
                                              echo "<div class=\"panel-heading\">".$row['adid']."</div>";
                                              echo "<div class=\"panel-body\">";
                                                echo "<div class=\"row\">";
                                                    
                                                    echo "<div class=\"col-sm-6\">";
                                                    echo "ZIP CODE: ".$row['zip']."</br>";
                                                    echo "SPACE: ".$row['space']."</br>";
                                                    echo "<b>DESCRIPTION</b></br>".$row['Description']."</br>";
                                                    echo "</br><button id=\"book".$row['adid']."\"class=\"btn btn-primary\" onclick= \"bookf(".$row['adid'].",".$row['ownerid'].")\">BOOK</button>";
                                                    echo "</div>";

                                                    echo "<div class=\"col-sm-6\">";
                                                        echo "<img src=\"/renthome/icons/home.png\" alt=\"pic\" width=\"100px\" height=\"100px\" />";
                                                    echo "</div>";

                                                echo "</div>";
                                              echo "</div>";
                                             echo "</div></br>";
                                        }
                                    ?>
                                    
                                    </div>
                                </div>
                            </div>
                        
                 
                 </div>




                <!-- my subscriptions -->
                 <div id="mysubtab" class="tab-pane">
                    
                     <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="btn btn-success active" data-toggle="pill" href="#accepted">accepted</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger" data-toggle="pill" href="#rejected">rejected</a>
                        </li>
                         <li class="nav-item">
                            <a class="btn btn-warning" data-toggle="pill" href="#pending">pending</a>
                        </li>

                     </ul>
                     <div class="tab-content">
                              <div class="tab-pane active container" id="accepted">
                                    <?php  include('accepted.php'); ?>
                              </div>
                              <div class="tab-pane container" id="rejected">
                                    <?php  include('rejected.php'); ?>
                              </div>
                              <div class="tab-pane container" id="pending">
                                    <?php  include('pending.php'); ?>
                              </div>
                     </div>

                 
                 </div>






                 <div id="submetab" class="tab-pane">
                     <?php include('mysub.php'); ?>
                 </div>
                            
                 <div id="adtab" class="tab-pane">
                    <center>
                     
                        <input name="zip" id="zip" placeholder="zip" type="text" /></br>
                         
                        <input name="space" id="space" placeholder="space" type="text"/></br>
                         
                        <input name="cost" id="cost" placeholder="cost" type="text"/></br>
                         
                        <input name="avail" id="avail" placeholder="available from" type="date"/></br>

                        
                        <textarea name="des" id="des" placeholder="description" ></textarea></br>
                         <label id="msg"></label></br>
                         <button id="submt" class="btn btn-success">submit</button>

                    
                     </center>
                 </div>

            </div>
                
            
        </div>
        <script>
            function bookf(i,oi) {
                $.post(
                    "/renthome/books.php",
                    {
                        adid: i,
                        ownerid:oi

                    },
                    function (data, status) {
                        
                        alert(data);

                    });
            }

             function conf(i,ui) {
                $.post(
                    "/renthome/conf.php",
                    {
                        adid: i,
                        userid:ui

                    },
                    function (data, status) {
                        
                        alert(data);

                    });
              }

               function rejf(i,ui) {
                $.post(
                    "/renthome/rejf.php",
                    {
                        adid: i,
                        userid:ui

                    },
                    function (data, status) {
                        
                        alert(data);

                    });
               }   

        </script>
    </body>
</html>
