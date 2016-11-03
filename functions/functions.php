<?php

   
     $con = mysqli_connect("localhost","root","","social_network") or die("COnnection established");
     
     function InsertUser(){
           
          if(isset($_POST['sign_up'])){
            global $con;
            $name = mysqli_real_escape_string($con,$_POST['u_name']);
            $pass = mysqli_real_escape_string($con,$_POST['u_pass']);
            $email = mysqli_real_escape_string($con,$_POST['u_email']);
            $country = mysqli_real_escape_string($con,$_POST['u_country']);
            $gender = mysqli_real_escape_string($con,$_POST['u_gender']);
            $b_day = mysqli_real_escape_string($con,$_POST['u_birthday']);
            $date = date("d-m-y");
            $status = "unverified";
            $posts = "no";
            
            $get_email = "select * from user where user_email='$email'";
            $run_email = mysqli_query($con,$get_email);
            $check = mysqli_num_rows($run_email);
            
            
            if($check==1){
                echo "<script>alert('This email is already registered!');</script>";
                exit();
            }
            
            if(strlen($pass)<8){
                echo "<script>alert('Password should be minium 8 characters!');</script>";
                exit();
            }
            
            $insert = "insert into user (user_name,user_pass,user_email,user_country,user_gender,user_b_day,user_image,register_date,last_login,status,posts) values('$name','$pass','$email','$country','$gender','$b_day','default.jpg','NOW()','NOW()','$status','$posts')";
            $run_insert =mysqli_query($con,$insert);
            
            if($run_insert){
                echo "<script>alert('Registration SuccessFull');</script>";
                echo "<script>window.open('../home.php','_self')</script>";
            }
          }
     }
 ?>    
 
 