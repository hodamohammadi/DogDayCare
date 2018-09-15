<!DOCTYPE html>
<html>
<?php $pageTitle = "Individual Sample"; $cssName = "sample-style.css"; include 'head.inc.php'; ?>




<body>

  <!–-Navigation Menu -–>

  <?php include 'menu.inc.php'; ?>

  <?php $pdo = new PDO('mysql:host=doggy.cjdt6g3hdqwt.us-east-2.rds.amazonaws.com;dbname=doggo', 'doggoadmin', 'number123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try{
      $result = $pdo-> query('SELECT `daycarelist`.`NAME`, `DESCRIPTION`, `DID` FROM `daycarelist` WHERE `daycarelist`.`DID`="1"');
      $reviews = $pdo-> query('SELECT `review`.`NAME`, `review`.`RATING`, `DETAILS` FROM `daycarelist`, `review` WHERE `daycarelist`.`DID`=`review`.`DIDforeign`');
    }catch (PDOException $e) {
      echo $e->getMessage();
    }

    if(isset($_POST['subbutton'])){


      foreach ($result as $daycare) {
      $daycareID = $daycare['DID'];
    }

      $name = addslashes($_POST["fullname"]);
      $review = addslashes($_POST["rev"]);
      $rating = addslashes($_POST["rating"]);
      $pdo = new PDO('mysql:host=doggy.cjdt6g3hdqwt.us-east-2.rds.amazonaws.com;dbname=doggo', 'doggoadmin', 'number123');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      try{
          $pdo-> query('INSERT INTO `review` (`NAME`, `DETAILS`, `RATING`, `DIDFOREIGN`) VALUES ("' . $name . '", "' . $review . '","' . $rating . '","' . $daycareID . '")');
          echo ("Review Submitted");
      }catch (PDOException $e) {
        echo $e->getMessage();
      }

  }
  


  ?>



  


  <div id="mymap"></div>


 
  <div class="examples">


   <?php
    foreach ($result as $daycare) {
      echo(

          '<div class="example">
          
                      <div class="info">
                        <img src="http://canineretreat.com/wp-content/uploads/2012/06/doggie-daycare.png" alt="doghaven" />
                      </div>
          
                      <div class="details">
                        <h2> ' . $daycare['NAME'] . '</h2>
                        <h3>3.5/5 Stars </h3>
          
                        <p class="description">' . $daycare['DESCRIPTION'] . '</p>
                        
                      </div>
          
          
                    </div>'

      );
    }
  ?>
                      
                    <hr class="line">
                    <div class="reviews">
          
  <?php
    foreach ($reviews as $singlereview) {
      echo(

                      '<div class="review">
                        <img src="https://c-sf.smule.com/z0/account/icon/v4_defpic.png" />
          
                        <div class="details">
                          <h2>' . $singlereview['NAME'] . '</h2>
                          <h3>' . $singlereview['RATING'] . '/5 Stars </h3>
          
                          <p class="description">' . $singlereview['DETAILS'] . '</p>
                        </div>
          
          
                      </div>'
                );
    }
  ?>
          
                      </div>
          
          
                    </div>
 


    <div class="example">
      <form onsubmit="return validate(this)" method="post" action="individual_sample.php">

        <label for="fname">Name</label>
        <input type="text" id="fname" name="fullname" placeholder="John Smith">
        <label for="rating">Rating</label>
        <input type="number" id="rate" name="rating" placeholder="3">
        <label for="rev">Review</label>
        <input type="textarea" id="rev" name="rev" placeholder="write your review...">
        
        <button class="buttonRegister" type="submit" name="subbutton" id="subbutton">Submit Review</button>

      </form>
    </div>
  </div>





  <!–-Footer -–>
  <div class="footer">
    <h2>DoggoDayCare</h2>
    <h5>Copyright © 2018 DoggoDayCare</h5>
  </div>

</body>

<script type="text/javascript" src="./js/sample.js"></script>

</html>