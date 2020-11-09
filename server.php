<?php require('config.inc.php');
?>
<!DOCTYPE html>
      <html>
      <head>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<center>
<br />
<h1></h1>
<h1></h1>
<br />
</center>
<header>
      <div class="logo">
        <img src="./resources/img/logo.png" alt="" />
        <p>COVID-19<br />STATS</p>
      </div>
      <nav>
        <ul>
          <li><a href="./index.html">HOME</a></li>
          <li><a href="./Code.php">COVID HOSPITAL</a></li>
          <li><a href="./Login.php">LOGIN</a></li>
        </ul>
      </nav>
    </header>
          <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}
h2{
  font-size: 40px;
  background-color: dodgerblue;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}

</style>
          </head>
          <body> 
                <table style="width:100%">
                <h2>Hospitals Nearby</h2>
                <tr>
                        <th>Hospital_ID</th>
                        <th>Type</th>
                        <th>Bed_Avl</th>
                        <th>Address</th>
                        <th>PIN</th>
                        <th>State</th>
                        <th>Contact</th>
                        <th>Per_Day_Cost</th>
                    </tr>   
          </body>
      </html>

<?php
 
 $Pin = mysqli_real_escape_string($db, $_POST["Pin"]);
$user_check_query = "SELECT * FROM hospital WHERE PIN = '$Pin'";
 
$result = mysqli_query($db, $user_check_query);
$check = mysqli_fetch_row($result);
    if($check > 0) {
      if ($result = mysqli_query($db, $user_check_query)) {
        while ($row = mysqli_fetch_row($result)) {
          echo "<tr>
          <td>$row[0]</td>
          <td>$row[1]</td>
          <td>$row[2]</td>
          <td>$row[3]</td>
          <td>$row[4]</td>
          <td>$row[5]</td>
          <td>$row[6]</td>
          <td>$row[7]</td>
          </tr>";
        }
        mysqli_free_result($result);
      }
    }
    else
    {
      echo "<h1>NOT FOUND ANY DATA</h1>";
    }


?>
