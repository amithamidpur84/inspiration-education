<?php
    session_start();
    $msg="";
    
    if(isset($_GET['dis'])){
        $name=$_GET['fname'];
        $email=$_GET['uemail'];
        $phone=$_GET['uphone'];
        $msg=$_GET['umgs'];
        $con= mysqli_connect("localhost", "root" ,"");
        mysqli_select_db($con, "online_tutors");
        $qry="insert into contact values('$name','$email','$phone','$msg')";
        mysqli_query($con, $qry);
        echo mysqli_error($con);
        if(mysqli_affected_rows($con)){
            $msg="Form has been submittet";
            
        }
        else{
            $msg="Form has not submit please check your date...";
            
        }
        mysqli_close($con);
        
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
            function Validation(){
                temp=true;
                s1=document.getElementById("t1").value;
                if(s1==""){
                    temp=false;
                    document.getElementById("t1").style="border-color:red";
                }
                else{
                    document.getElementById("t1").style="";
                }
                s1=document.getElementById("t2").value;
                if(s1==""){
                    temp=false;
                    document.getElementById("t2").style="border-color:red";
                }else{
                    document.getElementById("t2").styel="";
                }
                s1=document.getElementById("t3").value;
                if(s1==""){
                    temp=false;
                    document.getElementById("t3").style="border-color:red";
                }else{
                    document.getElementById("t3").style="";
                }
                s1=document.getElementById("t4").value;
                if(s1==""){
                    temp=false;
                    document.getElementById("t4").style="border-color:red";
                }else{
                    document.getElementById("t4").style="";
                }
                
            }
            
            
            
        </script>
        
        
        
    </head>
    <body  style="background-color: #4dff4d;">
        <?php
        include 'header.php';
       
        ?>
      <form onsubmit="return Validation()" method="GET">
             <div class="container-fluid">
                 <div class="row" style="height:550px;font-family: Constantia ">

            <div class="col-sm-1"></div>
            
            <div class="col-sm-5 bg">
                <h4> Company Name: <br><br>
                    Address With Phone Number<br><br>
                       Email ID<br></h4>
            </div>
                 <div class="col-sm-3 ">
                     <div class="form-group">
                         <h3>Query Form</h3>
                         <label>Name</label>
                         <input id="t1" type="text" name="fname" class="form-control" placeholder="Enter Name">
                         <label>Email ID</label>
                         <input id="t2" type="email" name="uemail" class="form-control" name="email" placeholder="Enter Email ID">
                         <label>Phone</label>
                         <input id="t3" type="number" name="uphone" class="form-control" name="phone" placeholder="Enter Number">
                         <label>Message</label>
                         <input id="t4" type="textarea" name="umsg" class="form-control" name="txt" row="15" colomn="12" >
                         <input  type="submit" name="dis" class="btn btn-success" value="Submit">
                     </div>
                 </div>
            <div class="col-sm-3"></div>
             
        </div>
             </div>
        </form> 
        <?php
        
        include'footer1.php';
        ?>
    </body>
</html>
