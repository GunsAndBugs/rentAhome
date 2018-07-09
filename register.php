<!DOCTYPE html>
<html lang="en">
    <head>
        
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!-- <script src="register.js"></script>-->

    <title>register</title>
    </head>
    <body>
      <div class="container">
       
                   
          <div class="row" style="position: relative; top: 50px;">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
                        <form action="/renthome/regist.php" method="post" enctype="multipart/form-data">
                        <label style="color: #144798; font-size: 40px;">REGISTER</label>
                        <div  class="form-group row">
                           <div > <input class="form-control" id="name" type="text" placeholder="name" name="name"/></div>
                        </div>
                        <div  class="form-group row">
                           <div > <input class="form-control" id="email" type="email" placeholder="email" name="email"/></div>
                        </div>
                        <div  class="form-group row">
                            <div > <input class="form-control" id="pass1" type="password" placeholder="password" name="pass1"/></div>
                        </div>
                        <div  class="form-group row">
                            <div > <input class="form-control" id="pass2" type="password" placeholder="password" name="pass2"/></div>
                        </div>
                        <div  class="form-group row">
                            <div > <input class="form-control" id="nid" type="text" placeholder="nid" name="nid"/></div>
                        </div>
                        <div  class="form-group row">
                            <div >Profile picture<input class="form-control" id="propic" type="file" name="propic"/></div>
                        </div>
                        
                        <div  class="form-group row">
                            <div > <button id="submt" class="btn">Sign Up</button></div>
                        </div>
                        </form>
                   
         
          </div>
          <div class="col-sm-4"></div>
          </div>   
           
            
            
      
      </div>
     
    </body>
    
</html>
