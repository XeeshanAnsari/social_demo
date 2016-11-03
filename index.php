<!DOCTYPE html>
<?php
   include("./functions/functions.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign UP</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src = "./js/new.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    
</head>
<body onload="slideA();">
         <!-- Navbar Start -->
        <div >
            <nav class="navbar navbar-default">
                <div class="container">
                    <ul class="nav navbar-nav ">
                       <li><a href="#">Home</a></li>
                       <li><a href="#">About</a></li>
                     </ul>
                </div>
            </nav>
        </div>
           <!-- Navbar Start -->
           
          <!-- Navbar Start -->
          
        <div id="mainContainer">
            <div class="container" id="center">

               
                <div class="col-md-7">
                   <div  id ="welcomeTag">
                       <h1>Wellcome to Our Site</h1>
                       <p>firendship coner for those who is interesrt in chating</p>
                      
                   </div>
                </div>
                 
                <div class="col-md-4"> 
                   
                    <div  id="signInBox" >
                        <form action="" >
                            <input type="text" name="userNameIn" id="userNameInput" required placeholder="Email or user name"><br>
                            <input type="password" name="userPasswordIn" id="userPassInput" required placeholder="Password">
                            <button class="btn btn-primary btn-sm signInButton" name="login"  ><b>Log in</b></button>
                            <input type="checkbox" name="rememberMe" id="remember"><label for="remember" id="meRemember"> Remember me . </label>
                            <a href="#" id="forgotPass">Forgot password?</a>
                        </form>
                    </div>
                    
                    <div  id="signUpBox">
                        <form action="" method="post">
                            <input type="text" name="u_name" id="userNameInputUp" placeholder="User name"><br>
                            <input type="email" name="u_email" id="userEmailInputUp" placeholder="Email"><br>
                            <input type="password" name="u_pass" id="userPassInputUp" placeholder="Password"><br>
                            <select name="u_country" id="user_country">country
                                <option >select a country</option>
                                <option >pakistan</option>
                                <option >america</option>
                                <option >England</option>
                              </select>
                              <select name="u_gender" id="user_gender">country
                                <option >select a gender</option>
                                <option >male</option>
                                <option >female</option>
                               
                              </select>
                              <input type="date" name="u_birthday" id="user_birth" >
                            <button class="btn btn-success btn-sm signUpButton" name="sign_up" ><b>Sign up</b></button>
                             
                         </form> 
                                <?php  InsertUser(); ?>
                                
                    </div>
                   <div>
                  
                       <p></p>
                   </div>
                </div>
            </div>
        </div>    
</body>
</html>