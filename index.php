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
          <form action="#" method="get" enctype="multipart/form-data" >
            
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
   $servername="mydemoserveractivity.mysql.database.azure.com";
   $username="myadmin@mydemoserveractivity";
   $password="Admin123";
   $database="azureactivity3db";

   $con = mysqli_connect($servername,$username,$password,$database);

   if($_POST)
   {
       if($_POST["btn_register"] == "registerd")
       {
           $name=$_POST['txt_fullname'];
           $user_username =$_POST['txt_username'];
           $user_password =$_POST['txt_password'];
           $confimation_password = $_POST['txt_confirmpassword'];
           
           $query = "insert into user(user_name,user_username,user_password) values ('$name','$user_username','$user_password')";


           if(!$con)
           {
              
               die("connection error");
           }

//            if($user_password == $confimation_password)
//            {
//             if(mysqli_query($con, $query))
//             {
//              mysqli_close($con);
//              echo "<script> window.location.href='index.php'</script>";
            

// //               //nexmo start

// //               include ( "src/NexmoMessage.php" );
              
// //               $msg="Hello Admin! There is a new registered user named ".$name;

// //               /**
// //                * To send a text message.
// //                *
// //                */
            
// //               // Step 1: Declare new NexmoMessage.
// //               $nexmo_sms = new NexmoMessage('42c6fcf1', 'PognbGIED570DB58');
            
// //               // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
// //               $info = $nexmo_sms->sendText( '+639095539191', 'Admin', $msg );
            
// //               // Step 3: Display an overview of the message
// //              // echo $nexmo_sms->displayOverview($info);
            
// //               // Done!
            

// //               //nexmo end




//             }else
//             {
//                echo "<script>alert('account username is exist')</script>";
//             }
//            }else
//            {
//             echo "<script>alert('Password does not match')</script>";
//            }
                  
                             
        }else
        {
            echo "error";
        }
   }
?>
