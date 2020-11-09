
</body>
</html>
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
          <li><a href="./index.html">INDEX</a></li>
          <li><a href="./User.html">HOME</a></li>
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
    <td><a href="expq.html"><button class = "btn modify">Modify</button></a></td>
</body>
</html>

<!-- <html>
<body>
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

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
<table style="width:100%"> -->
<!-- <?php
echo "<tr>
<th>Qurantine ID</th>
<th>Patient Name</th>
<th>Adhaar ID</th>
<th>Qtr Address</th>
<th>Current Status</th>
</tr> ";
$disp = mysqli_query($db, "select * from quarantine_register");
    while ($row = mysqli_fetch_row($disp)) {
        echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        </tr>";
      }
    ?>
</body>
</html> -->
