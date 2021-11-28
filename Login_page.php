<?php 
        session_start();
       
            $a="";
            if(isset($_GET['display'])){
                $username=$_GET['user'];
                $pass=$_GET['pass'];
                $con= mysqli_connect("localhost","root","");
                 mysqli_select_db($con,"online");
                 $qry="select *from register where email_id='$username' and password='$pass'";
                $resultset=mysqli_query($con, $qry);
                 echo mysqli_error($con);
                 if(mysqli_num_rows($resultset)>0){
                     if(isset($_GET['s1'])){
                         setcookie("username",$username,time()+60*60*24*30*12*2);
                         setcookie("pass",$pass);
                     }
                 //   $a="Login Successfull......";
                     $_SESSION['uemail']=$username;
                     $_SESSION['name']=$qry[0];
                     
                     header("location:home.php");
                 }
                 else
                 {
                     $a="Username and password error...";
                 }
                
            }
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title></title>
        <script>
            function validation(){
            temp=true;
            s1=document.getElementById("t1").value;
            if(s1==""){
                temp=false;
                document.getElementById("t1").style="border-color:red";
            }
            else
            {
                document.getElementById("t1").style="";
            }
            s1=document.getElementById("t2").value;
            if(s1==""){
                temp=false;
                document.getElementById("t2").style="border-color:red";
            }
            else
            {
                document.getElementById("t2").style="";
            }
            
            
            return temp;
        }
            </script>
    </head>
    <body>
        <?php
        include'header.php';
       
        ?>
        <form onsubmit="return validation()" method="GET">
            <div class="row" style="background-color:#4dff4d; height: 550px;font-family: Constantia;">
            
           
               <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Username</label>
                    <input id="t1" type="text" class="form-control" name="user" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ?>" placeholder="Enter Your Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="t2" type="password" class="form-control" name="pass" value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass'] ?>" placeholder="Enter Password">
                
                    <input id="t3" type="checkbox" name="s1" value="">Remember me !
                  

                </div>
                <div class="form-group">
                    <input  type="submit" name="display" class="btn form-control btn-success btn-sm" value="Sign In"  >
                </div>
            </div>
                       </div>
            </form>

        <?php
        echo $a;
        include 'footer1.php';
        ?>
    </body>
</html>
