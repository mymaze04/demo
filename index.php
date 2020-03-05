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
                <li><a href="index.php" class="active">Home</a></li>
                <!--<li>  <a href="fileManager.php">File Manager</a></li>-->
              
            </ul>
        </nav>    

<!-- <aside>
<h1>Side Bar</h1>    
</aside>     -->
          <form action="#" method="post" enctype="multipart/form-data" >
            
            <label>Product Name : </label>
            <input type="text" name="txt_productname"> <br><br>
            <label>Color    : </label>
            <input type="text" name="txt_color"> <br><br>
            <label>Price : </label>
            <input type="text" name="txt_price"> <br><br>
<!--              <label>Rate : </label>
            <input type="text" name="rate"> <br><br>
            <label>Worked Hours : </label>
            <input type="text" name="workedhours"> <br><br>
             <label>Deductions : </label>
            <input type="text" name="deductions">  -->
           <br><br>
           <!-- <input type="submit"> -->
           <button type="submit" name="btn_register" value="registerd">Register</button>
           
          </form>

          <br><br><br><br>
        <article class="main">
            
                    
           
            <table border=1 >
                <thead>
                <th  style="width: 100px;">ID</th>
                <th  style="width: 200px;">Product Name</th>
                <th  style="width: 153px;">Color</th>
                <th  style="width: 153px;">Price</th>
                  <th  style="width: 150px;">Action</th>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </article>

        <br><br><br><br><br><br><br><br><br><br><br><br>
        <footer class="footer">
        
        &copy; 2020 Image Uploading Website &nbsp;<span class="separator">|</span> Design by:<a href="http://www.facebook.com/mymaze04">Mark Fernandez</a>    
        </footer>    


    </div>

</body>

</html>


<?php
//    $servername="mydemoserveractivity.mysql.database.azure.com";
//    $username="myadmin@mydemoserveractivity";
//    $password="Admin123";
//    $database="azureactivity3db";
   $servername="localhost";
   $username="root";
   $password="";
   $database="azureactivity3";


   $con = mysqli_connect($servername,$username,$password,$database);

   if($_POST)
   {
       if($_POST["btn_register"])
       {
           $productname=$_POST['txt_productname'];
           $color =$_POST['txt_color'];
           $price =$_POST['txt_price'];
      
           
           $query = "insert into products(ProductName,Color,Price) values ('$productname','$color','$price')";


           if(!$con)
           {
              
               die("connection error");
           }
           if(mysqli_query($con, $query))
            {
             mysqli_close($con);
             
             echo "<script> alert('Successfully Saved!')</script>";
             echo "<script> window.location.href='index.php'</script>";

            }

                             
        }
   }
?>
