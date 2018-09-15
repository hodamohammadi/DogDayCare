<!DOCTYPE html>
<html>

<?php $pageTitle = "Submission"; $cssName = "add-style.css"; include 'head.inc.php'; ?>

<body>

  <?php include 'menu.inc.php'; ?>


  <?php


  if(isset($_POST['subbutton'])){

    require 'validate.inc.php';
    $errors = array();
    validateDCName($errors, $_POST, 'dname');
    validateDescription($errors, $_POST, 'detail'); 
    validateLong($errors, $_POST, 'long'); 
    validateLat($errors, $_POST, 'lat'); 
    if ($errors){
      echo 'Errors:<br/>';
      foreach($errors as $field => $error) {
        echo "$field $error</br>";
      }
    } else {

    
      $dcname = addslashes($_POST["dname"]);
      $descrition = addslashes($_POST["detail"]);
      $long = addslashes($_POST["long"]);
      $lat = addslashes($_POST["lat"]);
      $pdo = new PDO('mysql:host=doggy.cjdt6g3hdqwt.us-east-2.rds.amazonaws.com;dbname=doggo', 'doggoadmin', 'number123');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      try{
          $pdo-> query('INSERT INTO `daycarelist` (`NAME`, `DESCRIPTION`, `LONGITUDE`, `LATITUDE`) VALUES ("' . $dcname . '", "' . $descrition . '","' . $long . '","' . $lat . '")');
          echo ("Registration Successful");
      }catch (PDOException $e) {
        echo $e->getMessage();
      }

  }
  }
?>



  <!– background image–>
  <div class="bg">

    <div class="content">
      <h1>Add a DayCare</h1>
    </div>

    <!– input form for adding a place–>
    <div class="inputs">
      <form method="post" action="submission.php">

        <label for="dname">DayCare Name</label>
        <input type="text" id="dname" name="dname" placeholder="Dog Heaven" >
        <label for="detail">Description</label>
        <input type="text" id="dname" name="detail" placeholder="A place for your dogs to have fun." required>

        <div class="longlat">

          <input type="text" id="lat" name="lat" placeholder="Latitude" required pattern="-?\d*.\d*">
          <input type="text" id="long" name="long" placeholder="Longitude" required pattern="-?\d*.\d*">



        </div>

        <label for="pic">Image</label>
        <input type="file" accept="image/*" />

        <button class="buttonAdd" type="submit" name="subbutton" id="subbutton">Add DayCare</button>

      </form>

      <button type="submit" class="buttonAdd" id="geobtn">Current Location </button>
    </div>


  </div>



  <!–footer –>
  <div class="footer">
    <h2>DoggoDayCare</h2>
    <h5>Copyright © 2018 DoggoDayCare</h5>
  </div>



</body>

</html>