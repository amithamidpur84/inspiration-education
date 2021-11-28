<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <style>
        .div1{
            text-align: center;
            font-family: Constantia;
            font-size: 20px;
            color: white;
            margin-top: 100px;
            
            
        }
        
        
    </style>
    <body >
        <?php
        include 'header.php';
        
        ?>
        
        <div class="container-fluid">
            <div class="row" style="height: 725px;background-color:#4dff4d ;">
                <div class="col-sm-8 div1">
                  
                    <h1 style="font-size: 60px;">Bootstrap</h1>
                    <p>Bootstrap is completely free to download and use!</p>
                    <a href="learn_bootstrap.php"><input type="button" class="btn btn-success btn-sm" name="btn1" value="Learn Bootstrap"></a><br><br>
                    <a href="bootstrap_video.php"> <input type="button" classbtn btn-danger " name="btn2" value="Video Tutorial" ></a><br><br>
                    <a href="bootstrap_reference.php"> <input type="button" class="btn btn-warning btn-lg" name="btn3" value="Bootstrap Reference"></a><br><br>
                    
                    </div>
                <div class="col-sm-4 div1">
                    <div style="text-align:left;">
                    <h1>Bootstrap Example:</h1>
                   
                        <p style="color:white;">
                            &lt;div class="jumbotron text-center"&gt;<br>
                            &lt;h1>My First Bootstrap Page&lt;/h1&gt;<br>
                            &lt;p>Resize this responsive page to see the effect!&lt;/p><br>
                            &lt;/div>

                         
                              
                        </p>
                        <input type="button"class="btn btn-success " name="btn4" value="Try Yourself"><br>
                        
                    </div>
                    
                    
                </div>
                </div>
            
             <div class="row" style="height: 630px;background-color:  #99ffff ;">
                <div class="col-sm-8 div1">
                  
                    <h1 style="font-size: 60px;">PYTHON</h1>
                    <p>A popular programming language</p>
                    <a href="learn_python.php"><input type="button" class="btn btn-success" name="btn1" value="Learn Python"></a><br><br>
                    
                    <a href="python_reference.php"> <input type="button" class="btn btn-warning btn-lg" name="btn3" value="Python Reference"></a><br><br>
                    
                    </div>
                <div class="col-sm-4 div1">
                    <div style="text-align:left;">
                    <h1>Python Example:</h1>
                    if 5 &gt; 2:<br>
                    print("Five is greater than two!")<br><br>
                   
                        <input type="button"class="btn btn-success" name="btn4" value="Try Yourself"><br>
                        
                    </div>
                    
                    
                </div>
                </div>
                
             
             <div class="row" style="height: 650px;background-color: #ffa64d;">
                <div class="col-sm-8 div1">
                  
                    <h1 style="font-size: 60px;">SQL</h1>
                    <p>A language for accessing databases</p>
                    <a href="learn_sql.php"><input type="button" class="btn btn-success" name="btn1" value="Learn SQL"></a><br><br>
                    
                    <a href="sql_reference.php"> <input type="button" class="btn btn-warning btn-lg" name="btn3" value="SQL Reference"></a><br><br>
                    
                    </div>
                <div class="col-sm-4 div1">
                    <div style="text-align:left;">
                    <h1>SQL Example:</h1>
                    <p>
                        SELECT * FROM Customers<br>
                        WHERE Country='Mexico';<br><br>
                        
                    </p>
                  
                        <input type="button"class="btn btn-success" name="btn4" value="Try Yourself"><br>
                        
                    </div>
                    
                    
                </div>
            
            
            </div>
        </div>
        
            
   
        
        
       <?php
            echo "<br>";
        include 'footer1.php';
        ?>
    </body>
</html>