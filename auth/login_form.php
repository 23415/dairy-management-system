<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
<title>Login Form Design</title>
<script type="text/javascript" src="<?php Page_Url() ?>js/jquery-1.8.2.js"></script>
                <script type="text/javascript" src="<?php Page_Url() ?>js/bootstrap.js"></script>
                <script type="text/javascript" src="<?php Page_Url() ?>js/bootstrap-datetimepicker.min.js"></script>

                <link type="text/css" rel="stylesheet" href="<?php Page_Url() ?>css/bootstrap.css" /> 
                <link type="text/css" rel="stylesheet"  href="<?php Page_Url() ?>css/bootstrap-responsive.css" />
                <link type="text/css" rel="stylesheet" href="<?php Page_Url() ?>css/main.css" />
                <link type="text/css" rel="stylesheet" href="<?php Page_Url() ?>css/bootstrap-datetimepicker.min.css" />
                

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

 <h1 id="title" >Dairy Management System</h1> 

    <!-- <div class="loginbox">
     
       <h1>Login Here</h1> 
       <form>
       <form name= method="post" class="form-signin form-horizontal" enctype="application/x-www-form-urlencoded" action="">       
           <p>Username</p>
           <input type="text" name="" placeholder="Enter Username">
           <p>password</p>
           <input type="password" name="" placeholder="Enter password">
           <input type="submit" name="" value="Login">
           <a href="#">Forgot password?</a><br>
           <a href="#">Don't have an account?</a> -->
<!-- </form> -->
<!-- </div> -->
<img src="img/milky.jpg" height="1000px" width="1200px">
      <div class="loginbox">
    
     <div class = "container">
    <div class="wrapper">
    
         <form name="<?php echo $formname; ?>" method="post" class="form-signin form-horizontal <?php echo $formclass ?>" enctype="application/x-www-form-urlencoded" action="<?php echo $formaction ?>">       
            <h3 class="form-signin-heading">LOGIN </h3>
            <hr class="colorgraph"><br>
              
              <input type="text" class="form-control input-xlarge input-block-level input" name="username" placeholder="Username/Email" required > 
              <input type="password" class="form-control input-xlarge input-block-level input" name="password" placeholder="Password" required>               
              <input name="action" id="action" value="login" type="hidden">
              <input class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">           
        </form>         
    </div>
</div>
   


              
        
        
    <!-- </div>  -->

            
       <!--  <div class="">
                    <form name="" method="post" id="" class="form-horizontal " enctype="application/x-www-form-urlencoded" action="">
                        <div class="control-group"><label  class="control-label" for="username">Username</label>
                            <div class="controls">
                                <input  class=""  name="username" id="username" type="text">
                            </div>
                        </div>
                        <div class="control-group"><label class="control-label" for="password">Password</label>
                            <div class="controls">
                                <input  class="input-xlarge" name="password" id="password" type="password">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input name="action" id="action" value="login" type="hidden">
                                <input class="btn btn-large btn-inverse" name="submit" id="submit" value="Login" type="submit">
                            </div>
                        </div>
                        <div>

                    </form>
                </div> -->

                <?php
                  include __DIR__ . "/../incl/footer.incl.php"
                ?>
