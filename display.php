<?php require('config.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 3px solid #ddd;
}

th, td {
  text-align: left;
  padding: 26px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

<link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <center>
      <br />
      <h1></h1>
      <h1</h1>
      <br />
    </center>
    <header>
      <div class="logo">
        <img src="./resources/img/logo.png" alt="" />
        <p>COVID-19<br />STATS</p>
      </div>
      <nav>
        <ul>
            <li><a href="./index.html">INDEX</a></li>
            <li><a href="./User.html">HOME</a></li>
          <li><a href="./Code.php">COVID HOSPITAL</a></li>
        </ul>
      </nav>
    </header>
</head>
<body>
    <h1>Hospital Details</h1>

<?php
$sql= "SELECT * FROM hospital";
  $result = mysqli_query($db,$sql);
  
  echo "<table>
  <tr>
  <th>Hospital_ID</th>
  <th>Type</th>
  <th>Bed_Avl</th>  
  <th>Address</th>
  <th>PIN</th>
  <th>State</th>
  <th>Contact</th>
  <th>Per_Day_Cost</th>
  </tr>";
  while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "<td>" . $row[5] . "</td>";
    echo "<td>" . $row[6] . "</td>";
    echo "<td>" . $row[7] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($db);

  ?>