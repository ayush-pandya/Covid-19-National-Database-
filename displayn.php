<?php require('config.inc.php');
?>
<html>
<body>
<table style="width:100%">
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
    <h1>National Register</h1>
<?php
echo "<tr>
<th>Patient Name</th>
<th>Adhaar ID</th>
<th>State</th>
<th>Hospital ID</th>
<th>Current Status</th>
<th>Country</th>
</tr> ";
$disp = mysqli_query($db,"select * from national_register");
    while ($row = mysqli_fetch_row($disp)) {
        echo "<tr>
        <td >$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        </tr>";
      }
    ?>