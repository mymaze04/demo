<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="home-page">
        
          <div class="container">
        <header class="header">
            <a class="link-title" href="/">Azure Activity 3</a>
        </header>     

        <nav class="menu">  
            <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <!--<li>  <a href="fileManager.php">File Manager</a></li>-->
              
            </ul>
        </nav>    

<!-- <aside>
<h1>Side Bar</h1>    
</aside>     -->
          <form action="#" method="get" enctype="multipart/form-data" >
            
            <label>Product Name : </label>
            <input type="text" name="txt_productname"> <br><br>
            <label>Color    : </label>
            <input type="text" name="txt_color"> <br><br>
            <label>Price : </label>
            <input type="text" name="txt_price"> <br><br>
             <label>Rate : </label>
            <input type="text" name="rate"> <br><br>
            <label>Worked Hours : </label>
            <input type="text" name="workedhours"> <br><br>
             <label>Deductions : </label>
            <input type="text" name="deductions"> <br><br>
           
           <input type="submit">

           
          </form>


        <!-- <article class="main">
            
                    
           
             <div id="home-image">
            </div> 
        </article> -->

        <br><br><br><br><br><br><br><br><br><br><br><br>
        <footer class="footer">
        
        &copy; 2020 Image Uploading Website &nbsp;<span class="separator">|</span> Design by:<a href="http://www.facebook.com/mymaze04">Mark Fernandez</a>    
        </footer>    


    </div>

</body>

</html>
<?php
$host = 'mydemoserver.mysql.database.azure.com';
$username = 'myadmin@mydemoserver';
$password = 'your_password';
$db_name = 'your_database';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}



//Close the connection
mysqli_close($conn);
?>
