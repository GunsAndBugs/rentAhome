<?php
    
    session_start();
    
    //if( isset($_SESSION['id']) ) header('Location: http://localhost:8079/renthome/profile.php');



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

    <style>
        
           body { 
                  background: url(/renthome/images/home2.jpeg) no-repeat center center fixed; 
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: cover;
                  background-color: #f00;
                  height: 100%;
            }
        #logindrp{
                border-style: solid;
    border-width: 1px;
    border-color: white;
    color: white;
    width: 50px;
    height: 25px;
    padding: 11px;
    font-size: 24px;
        }
        
        .genbutton{
            border-style: solid;
            border-width: 1px;
            border-color: gray;
            color: gray;
            width: 190px;
            height: 32px;
            font-size: 17px;
            background-color: white;
        }
        
        .dropdown-menu{
            position: absolute;
            top: 123%;
            left: 15px;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            font-size: 14px;
            text-align: left;
            list-style: none;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #ccc;
            border: 1px solid rgba(0,0,0,.15);
        }
        
        .transp{
            backface-visibility: hidden;
                
        }
        a, a:hover{
            color: #eedd1f;
            padding-left:5px; 
        }
        .rentahome{
            color: white;
            vertical-align: central;
            font-family: mania;
        }
        @font-face {
            font-family: mania;
            src: url(/renthome/fonts/hotel_de_paris.ttf);
        }
        @font-face {
    font-family: zillslab;
    src: url(/renthome/fonts/ZillaSlabHighlight-Bold.ttf);
}

        .bigtext{
    
   color: white;
   font-family: zillslab;
   font-size: 300%;
}
    </style>


</head>
<body >



    <div class="container-fluid">
           </br>
           </br>
           <div class="row"> 
           <div class="col-sm-1"></div>
           <div class="col-sm-6">
           <div class="dropdown col-sm-12 transp">
                    
               <a href="#"  id="logindrp" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
               <a  href="/renthome/register.php" >or Register</a>
               <ul id="login-dp" class="dropdown-menu">
                       <li>
                           </br>
                           </br>
                           <center>
                            <form method="post" action="login.php">
                            <div  class="input-group col-sm-11" style="margin-bottom:3px; ">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <div > <input class="form-control" name="email" id="email" type="email" placeholder="email"/></div>
                            </div>
                             
                            <div  class="input-group col-sm-11" style="margin-bottom:3px; ">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <div > <input class="form-control" name="pass1" id="pass1" type="password" placeholder="password"/></div>
                            </div>
                               
                            <div  class="input-group col-sm-11">
                                <div > <button id="submt" type="submit" class="genbutton">Log In</button></div>
                            </div>
                            </form>
                               </br>
                               </br>

                            </center>
                            
                       </li>
               </ul>

                  
           </div>
           
           </div> 
               <div class="col-sm-1"></div>
           <div class="col-sm-4">
                    <label class="bigtext">RENT-a-HOME</label>
           </div>
            
             
           
            </div>

           
            <div class="row" >
                    
            </div>
            
            
      
      </div>




</body>
</html>