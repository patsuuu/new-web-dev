
<?php

@include 'conn.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   
   

   $select = " SELECT * FROM hub_tbl WHERE name = '$name' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      

      if($row['user_type'] == 'admin'){

        $_SESSION['admin_name'] = $row['name'];
        header('location:home.php');

     }elseif($row['user_type'] == 'user'){

        $_SESSION['user_name'] = $row['name'];
        header('location:view.php');

     }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

  
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
      .form {
        
        border-style: inset;
  border-width: medium;
  position: relative;
  height: auto;
  width: 25%;
  bottom: 0px;
  padding:  30px  ;
  font-size: 17px;
  line-height: 1.3;
  background-color: #FF6701;
  margin-left: auto; 
  margin-right: auto;
  margin-bottom: 200px;
}
#title{
  color : #FF6701;
  
}
* {
  box-sizing: border-box;
}
body {
 background-color: #FFF8C9;
}
body {
  margin: 0;
  font-family: Timesnewroman;
  font-size: 20px;
  background-color: #1F1717
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  width: 100%;
  
  
}


#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}


.logo {
  background: url("../graphics/dhaka logo.png");
  padding: 0px;
  margin: 0px;
  width: 150px;
  height: 0px;
  
}
#myBtn:hover {
  background: #ddd;
  color: black;
}
      </style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>patsuhub</title>

   <!-- custom css file link  -->
  

</head>
<body>
<center>
      <h1 id="title">Patsuhub</a></h1>
</center>
<center><br><br> <br><br> <br><br> <br>
<div class = "form">
<div class="form-container">
   <form action="" method="post">
      <h3>login hub</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <center>
      <input type="name" name="name" required placeholder="enter your name">
      </center><br>
      <center>
      <input type="password" name="password" required placeholder="enter your password">
      </center><br>
      <center>
      
      <input type="submit" name="submit" value="login now" class="form-btn">
      </center>
      <p>don't have an account? <a href="register.php">register now</a></p>
      
   </form>
   
</div>

    </div>
</body>
</html>