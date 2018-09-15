<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="./css/search-style.css">
  <script type="text/javascript" src="./js/search.js"></script>
</head>

<body>

  <?php include 'menu.inc.php'; ?>

  <!– Background image –>
  <div class="bg">

    <div class="content">
      <h1>Find a DayCare</h1>
    </div>


    <!–Input form for search –>
    <div class="input">
      <form action="results_sample.php" method="post">

        <label for="dname">Name</label>
        <input type="text" id="dname" name="dname" placeholder="Enter a daycare's name...">
        <label for="rating">Rating</label>
        <select id="rating" name="rating">
          <option value="">All</option>
          <option value="1">1 Star</option>
          <option value="2">2 Star</option>
          <option value="3">3 Star</option>
          <option value="4">4 Star</option>
          <option value="5">5 Star</option>
        </select>

        <button class="buttonSearch" type="submit" id="searchbtn">Search</button>


      </form>
      <button class="buttonSearch" type="submit" id="nearbtn">Search Near Me</button>
    </div>


  </div>

  <!–footer –>
  <div class="footer">
    <h2>DoggoDayCare</h2>
    <h5>Copyright © 2018 DoggoDayCare</h5>
  </div>

</body>

</html>