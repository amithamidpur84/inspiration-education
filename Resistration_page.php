<?php 
session_start();
        $msg="";
        if(isset($_GET['display'])){
            $name=$_GET['fname'];
            $email=$_GET['email'];
            $pwt=$_GET['pass'];
            $cpwt=$_GET['pass'];
             
            $gen=$_GET['gend'];
           $phone=$_GET['phone'];
            $address=$_GET['add'];
            $country=$_GET['count'];
            $photo=$_GET['pic'];
            $con= mysqli_connect("localhost","root","");
            mysqli_select_db($con, "online_tutors");
            $qry="insert into  registration_user values('$name','$email','$pwt','$cpwt','$gen',$phone,'$address','$country','$photo')";
            mysqli_query($con, "$qry");
            echo mysqli_error($con);
            if(mysqli_affected_rows($con)){
                $msg="Form is successfully submit";
                header("location:login_form.php");
            }
                else 
                            $msg="Form is not submit please check your data....";
        mysqli_close($con);
  
        }
?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            
        </style>
        <script>
                function ValidationForm(){
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
                    }
                    else{
                        document.getElementById("t2").style="";
                    }
                    s1=document.getElementById("t3").value;
                    if(s1==""){
                        temp=false;
                        document.getElementById("t3").style="border-color:red";
                    }
                    else{
                        document.getElementById("t3").style="";
                    }
                    s1=document.getElementById("t4").value;
                    if(s1==""){
                        temp=false;
                        document.getElementById("t4").style="border-color:red";
                    }
                    else{
                        document.getElementById("t4").style="";
                    }
                    s1=document.getElementById("t5").checked;
                    s2=document.getElementById("tt5").checked;
                    if(s1==true || s2==true){
                        document.getElementById("dv").innerHTML="";
                    }
                    else{
                        temp=false;
                        document.getElementById("dv").innerHTML="Please select gender";
                    }
                     s1=document.getElementById("t6").value;
                    if(s1==""){
                        temp=false;
                        document.getElementById("t6").style="border-color:red";
                    }
                    else{
                        document.getElementById("t6").style="";
                    }
                     s1=document.getElementById("t7").value;
                    if(s1==""){
                        temp=false;
                        document.getElementById("t7").style="border-color:red";
                    }
                    else{
                        document.getElementById("t7").style="";
                    }
                     s1=document.getElementById("t8").value;
                    if(s1==""){
                        temp=false;
                        document.getElementById("t8").style="border-color:red";
                    }
                    else{
                        document.getElementById("t8").style="";
                    }
                     s1=document.getElementById("t9").value;
                    if(s1==""){
                        temp=false;
                        document.getElementById("t9").style="border-color:red; color:red";
                    }
                    else{
                        document.getElementById("t9").style="";
                    }
                    s1=document.getElementById("t3").value;
                    s2=document.getElementById("t4").value;
                    if(s1!=s2){
                        document.getElementById("d2").innerHTML="password does not match...";
                        temp=false;
                    }
                   else if(s1.length<8){
                        document.getElementById("d2").innerHTML="Password must be at least 8 character long";
                        temp=false;
                    }
//                    else if(s1.length>=8){
//                        upper=0;
//                        lower=0;
//                        digit=0;
//                        symbol=0;
//                        for(i=0;i<s1.length;i++){
//                            x=a1.charCodeAt(i);
//                            if(x>=65 && x<=90)
//                                upper++;
//                            else if(x>=97 && x<=122)
//                                lower++;
//                            else if(x>=48 && x<=57)
//                                digit++;
//                            else
//                                symbol++;
//                        }
//                       if(upper==0 && lower==0 && digit==0 && symbol==0){
//                            document.getElementById("d2").innerHTML="Password consist of 1 Uppercas, 1 Lowercase, 1 Digit, 1 Symbol";
//                            temp=false;
//                    }
//                    else
//                        document.getElementById("d2").innerHTML="";
//                }
                else{
                        document.getElementById("d2").innerHTML="";
                    }
                        
                        s1=document.getElementById("t6").value;
                        p1=parseInt(s1);
                        if(p1>=6000000000 && p1<=9999999999){
                            document.getElementById("d3").innerHTML="";
                        }
                        else{
                             temp=false;
                            document.getElementById("d3").innerHTML="Invalid Phone Number...";
                           
                        }

                    
                    return temp;
                }
                function CheckEmail(){
                    email=document.getElementById("t2").value;
                    obj=new XMLHttpRequest();
                    obj.open("get","validateemail.php?email_id="+email,true);
                    obj.send();
                    obj.onreadystatechange=function(){
                        if(obj.status==200 && obj.readyState==4){
                            s1=obj.responseText;
                            document.getElementById("d5").innerHTML=s1;
                        }
                    }
                }
                function PrintClock(){
                    obj=XMLHttpRequest();
                    obj.open("get","gettime.php",true);
                    obj.send();
                    obj.onreadystatechange=function(){
                        if(obj.status==200 && obj.readyState==4){
                            s1=obj.responseText;
                            document.getElementById("d6").innerHTML=s1;
                        }
                    }
                }
                function Start(){
                    setInterval(PrintClock,5000);
                }
        </script>
    </head>
    <body onload="Start()">
        <?php
        include 'header.php';
      
        ?>
                        <div id="d6"></div>
                    
                        <div class="container-fluid">
        <div class="row" style="background-color: #4dff4d; font-family: Constantia;">
            

                    <form onsubmit="return ValidationForm()" method="GET">
                                    <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                   
                
                        
                           <div class="form-group">
                                <label>Name</label>
                                 <input id="t1" type="text" class="form-control" name="fname" value="" placeholder="Enter Your Name">
                            </div>
                       

                        <div class="form-group">
                                <label>Email ID</label>
                                 <input id="t2" type="email" onchange="CheckEmail()" name="email" class="form-control"  value="" placeholder="Ente Email ID"><div id="d5"></div>

                    </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="t3" type="password" name="pass" class="form-control" value="" placeholder="Enter Password">
                    </div>
                               
                           <div class="form-group">
                                <label>Conform Password</label>
                               
                                 <input id="t4" type="password" name="pass" class="form-control" value="" placeholder="Re-enter Password"><div id="d2" style="color:red;"></div>
                    </div>
                        

                                   <div class="form-group">         
                                <label>Gender</label>
                               
                                 <input id="t5" type="radio" name="gend"  value="Male" ><label>Male</label> <input id="tt5" type="radio" value="Female" ><label>Female</label>     <p id="dv" style="color:red"></p>

                    </div>
                                                           
                                                
                        
                                
                                  <div class="form-group">
                                <label>Phone Number</label>
                                 <input id="t6" type="number"class="form-control"  name="phone" value="" placeholder="Enter Phone Number"><p id="d3"style="color:red;"></p>
                                  </div>
                                 <div class="form-group">  
                                <label>Address</label>
                                <input id="t7" type="text"class="form-control"  name="add" value="" placeholder="Enter Your Address">
                                 </div>
                           <div class="form-group">
                                <label >Country</label>
                                    <select id="t8" class="form-control"  name="count">
                                        <option value="">Select Country</option>
                                        <option value="USA">USA's</option>
                                        <option value="India">India</option>
                                        <option value="Pakistan">Pakistan</option>
                                    </select>
                    </div>
                                 <div class="form-group">
                                <label>Upload Photo</label>
                                    <input  type="file" id="t9"  class="form-control-file" name="pic" value="" >
                                 </div>

                    <div class="form-group">
                    <input  type="submit" class="form-control btn-success" name="display" value="Register here">    
                    </div>
                    <div class="form-group">
                    <input type="reset" class="form-control btn-danger" name="Reset" value="Reset">
                        </div>
                            </div>
            </form>
                    

                    <div class="col-sm-4"> </div>
                    
                    
        
             
                        </div>
                            </div>
               
          
            
        
        <?php
        include 'footer1.php';
        ?>
        
    </body>
</html>

 
