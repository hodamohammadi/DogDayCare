<!DOCTYPE html>
<html>

<?php $pageTitle = "Result Sample"; $cssName = "results-style.css"; include 'head.inc.php'; ?>


<body>

  <!–Navigation Menu –>
  <?php include 'menu.inc.php'; ?>

<?php $pdo = new PDO('mysql:host=doggy.cjdt6g3hdqwt.us-east-2.rds.amazonaws.com;dbname=doggo', 'doggoadmin', 'number123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!empty($_POST['dname']) and empty($_POST['rating'])) {
                    $dname = $_POST['dname'];     
                    try{
                        $result = $pdo->query("SELECT `NAME`, `RATING`, `description` FROM `daycarelist` WHERE NAME LIKE '%".$dname."%'");
                    }catch (PDOException $e) {
                        echo $e->getMessage();
                    }

    }elseif (empty($_POST['dname']) and !empty($_POST['rating'])) {
                    $rating = $_POST['rating'];     
                    try{
                        $result = $pdo->query("SELECT `NAME`, `RATING`, `description` FROM `daycarelist` WHERE RATING = ".(int)$rating);
                    }catch (PDOException $e) {
                        echo $e->getMessage();
                    }
   
      
    } elseif (!empty($_POST['dname']) and !empty($_POST['rating'])) {

                    $dname = $_POST['dname'];     
                    $rating = $_POST['rating'];

                    try{
                        $result = $pdo->query("SELECT `NAME`, `rating`, `description` FROM `daycarelist` WHERE RATING = $rating AND NAME LIKE '%".$dname."%'");
                    }catch (PDOException $e) {
                        echo $e->getMessage();
                    }
    } else {
        
                    try{
                        $result = $pdo->query("SELECT `NAME`, `rating`, `description` FROM `daycarelist`");
                    }catch (PDOException $e) {
                        echo $e->getMessage();
                    }
    }







  ?>


  <!– Map–>
  <div id="mymap"></div>

  <!– The list of results –>
  <div class="examples">

    <!– Example of a result –>

    <?php 
        foreach($result as $daycare) {
                    
                    
                    echo('
                        <a class="example" href="individual_sample.php">
                          <div class="info">
                            <img src="http://canineretreat.com/wp-content/uploads/2012/06/doggie-daycare.png" alt="doghaven" />
                          </div>

                          <div class="details">
                            <h2>' . $daycare['NAME'] . ' </h2>
                            <h3>' . $daycare['RATING'] . '/5 Stars </h3>

                            <p class="description">'. $daycare['description'] . '</p>
                          </div>
                        </a>'
                  );

  

        }
    ?>

  </div>





  <!–Footer –>
  <div class="footer">
    <h2>DoggoDayCare</h2>
    <h5>Copyright © 2018 DoggoDayCare</h5>
  </div>


  <script type="text/javascript" src="./js/results.js"></script>
</body>

</html>