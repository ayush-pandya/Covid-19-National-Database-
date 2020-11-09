
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
          <li><a href="./Code.php">COVID HOSPITALY</a></li>
        </ul>
      </nav>
    </header>
          </head>
          <body> 
              <h1>Inserted!!</h1>
                <a href="./expn.html"><button>Check here</button></a>
                
          </body>
      </html>

<?php
  $hid = $_GET['Hid'];
  $pname = $_GET['pname'];
  $country = $_GET['country'];
  $adhar= intval($_GET['adhar']);
  $state = $_GET['state'];
  $status = $_GET['status'];

  $sql= "INSERT INTO `national_register`(`pat_name`, `aadhar_id`, `state`, `hospital_id`, `current_status`, `country`) VALUES ('$pname','$adhar','$state','$hid','$status','$country')";
  $result = mysqli_query($db,$sql);
  #echo "<h1>Inserted Sucess</h1>";

  ?>
