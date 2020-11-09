<?php require('config.inc.php');
?>
<html>
<body>
<table style="width:100%">

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
        <p>COVID-19<br />STATS</p>
      </div>
      <nav>
        <ul>
          <li><a href="./index.html">HOME</a></li>
          <li><a href="./Code.php">COVID HOSPITAL</a></li>
        </ul>
      </nav>
    </header>
    <style>
  .btn {
  border: none;
  background-color: inherit;
  padding: 40px 800px;
  font-size: 26px;
  cursor: pointer;
  display: inline-block;
}
.modify {
  color: red;
  background-color: ;
}

.modify:hover {
  background: #f44336;
  color: white;
}
</style>
    <td><a href="exp.html"><button class = "btn modify">Modify</button></a></td>
<!-- <?php
echo "<tr>
    <th>Hospital_ID</th>
    <th>Type</th>
    <th>Bed_Avl</th>
    <th>Address</th>
    <th>PIN</th>
    <th>State</th>
    <th>Contact</th>
    <th>Per_Day_Cost</th>
    </tr>  ";
          
    $disp = mysqli_query($db,"select * from hospital");
    while ($row = mysqli_fetch_row($disp)) {
        echo "<tr>
        <td >$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        <td>$row[6]</td>
        <td>$row[7]</td>
        </tr>";
      }
?> -->
</body>
</html>
