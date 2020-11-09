  <!-- 
Hospital_ID
Type
Bed_Avl  
Address
PIN
State
Contact
Per_Day_Cost 
-->
<?php require('config.inc.php');
?>
<!DOCTYPE html>
      <html>
      <head>
          <style>
          body {
          background-color: white;
          color: black;
          }
          table, th, td {
          border: 1px solid blue;
          }
          th {
          background-color: #9dc3e6;
          color: #6a149b;
          text-align: center;
          font-size : 24px
          }
          td{
            text-align: center;
            font-size : 20px
          }
          h2 {
            background-color: Black  ;
            color: Red;
            font-size : 40px
          }
          button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
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
              <h1>Inserted!!</h1>
                <a href="./exp.html"><button>Check here</button></a>
                
          </body>
      </html>

<?php
$hid = $_GET['Hid'];
  $type = $_GET['type'];
  $bed = intval($_GET['bed']);
  $addr = $_GET['addr'];
  $pin = intval($_GET['pin']);
  $state = $_GET['state'];
  $cont = intval($_GET['contact']);
  $pdc = intval($_GET['pdc']);

  $sql= "INSERT INTO `hospital`(`hospital_id`, `type`, `bed_avl`, `address`, `pin`, `state`, `contact`, `per_day_cost`) VALUES ('$hid','$type','$bed','$addr','$pin','$state','$cont','$pdc')";

  $result = mysqli_query($db,$sql);

  #echo "<h1>Inserted Sucess</h1>";

  ?>
