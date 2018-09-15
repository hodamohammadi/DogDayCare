
<!DOCTYPE html>
<html>

<?php $pageTitle = "Individual Sample"; $cssName = "register-style.css"; include 'head.inc.php'; ?>

<body>

  <?php include 'menu.inc.php'; ?>

<?php

  if(isset($_POST['subbutton'])){
    require 'validate.inc.php';
    $errors = array();
    validateEmail($errors, $_POST, 'email');
    validateName($errors, $_POST, 'fullname'); 
    validatePassword($errors, $_POST, 'password'); 
    if ($errors){
      echo 'Errors:<br/>';
      foreach($errors as $field => $error) {
        echo "$field $error</br>";
      }
    } else {

      $fullname = addslashes($_POST["fullname"]);
      $email = addslashes($_POST["email"]);
      $password = addslashes($_POST["password"]);
      $pdo = new PDO('mysql:host=doggy.cjdt6g3hdqwt.us-east-2.rds.amazonaws.com;dbname=doggo', 'doggoadmin', 'number123');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      try{
          $pdo-> query('INSERT INTO `users` (`USERNAME`, `EMAIL`, `PASSWORD`, `NEWSLETTER`) VALUES ("' . $fullname . '", "' . $email . '","' . $password . '","0")');
          echo ("Registration Successful");
      }catch (PDOException $e) {
        echo $e->getMessage();
      }

  }
  }
?>




  <!– background image –>
  <div class="bg">

    <div class="content">
      <h1>Register</h1>
    </div>


    <!– input form for registration–>
    <div class="input">
      <form onsubmit="return validate(this)" method="post" action="registration.php">

        <label for="fname">Name</label>
        <input type="text" id="fname" name="fullname" placeholder="John Smith">
        <label for="ename">Email</label>
        <input type="text" id="ename" name="email" placeholder="johnsmith@gmail.com">
        <label for="pword">Password</label>
        <input type="password" id="pword" name="password" placeholder="">
        <div class="news">
          <input type="checkbox" name="terms" value="terms"> Sign me up for Doggo news. </div>
        <button class="buttonRegister" type="submit" name="subbutton" id="subbutton">Register</button>

      </form>
    </div>



 


  </div>



  <!– footer –>
  <div class="footer">
    <h2>DoggoDayCare</h2>
    <h5>Copyright © 2018 DoggoDayCare</h5>
  </div>

</body>

</html>