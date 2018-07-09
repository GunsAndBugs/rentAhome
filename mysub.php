<?php 

                                        $conn = new mysqli( "localhost","root","","db_rentahome" );
                                        if( $conn->connect_error ){  echo "SERVER CAN NOT BE CONNECTED,TRY AGAIN.</br>"; die();  }
                                        $userid = $_SESSION['id'];
                                        $sql = "SELECT * FROM booked NATURAL JOIN ads WHERE ownerid = '$userid' ORDER BY id DESC ";
                                        $result = $conn->query($sql);

                                        while( $row = $result->fetch_assoc() ){
                                          
                                            echo"<div class=\"panel panel-default\">";
                                              echo "<div class=\"panel-heading\">".$row['adid']."</div>";
                                              echo "<div class=\"panel-body\">";
                                                echo "<div class=\"row\">";
                                                    
                                                    echo "<div class=\"col-sm-6\">";
                                                    echo "ZIP CODE: ".$row['zip']."</br>";
                                                    echo "SPACE: ".$row['space']."</br>";
                                                    echo "<b>DESCRIPTION</b></br>".$row['Description']."</br>";
                                                    echo "<strong> Bidder: ".$row['userid']." </strong></br>";
                                                    echo "</br><button id=\"book".$row['adid']."\"class=\"btn btn-success\" onclick= \"conf(".$row['adid'].",".$row['userid'].")\">accept</button>";
                                                    echo "<button id=\"book".$row['adid']."\"class=\"btn btn-danger\" onclick= \"rejf(".$row['adid'].",".$row['userid'].")\">reject</button>";
                                                    echo "</br>";
                                                    
                                                    echo "</div>";
                                                   
                                                    echo "<div class=\"col-sm-6\">";
                                                        echo "<img src=\"/renthome/icons/home.png\" alt=\"pic\" width=\"100px\" height=\"100px\" />";
                                                    echo "</div>";

                                                echo "</div>";
                                              echo "</div>";
                                             echo "</div></br>";
                                        }
 ?>


