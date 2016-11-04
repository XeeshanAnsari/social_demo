 <?php
 
include("./includes/connection.php");

if(isset($_POST['login'])){
            
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $pass = mysqli_real_escape_string($con,$_POST['pass']);
            
            $get_email = "select * from user where user_email='$email' AND user_pass='$pass'";
            $run_email = mysqli_query($con,$get_email);
            $check = mysqli_num_rows($run_email);
        
           if($check==1){
               $_SESSION['user_email']=$email;
               echo"<script>window.open('home.php','_self');</script>";
           }else {
                echo" <script>alert('User Email and password is incorrect');</script> ";
           }
        
        }
?>