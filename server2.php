<?php require('config.inc.php');
?>
<!DOCTYPE html>
      <html>
      <head>
      <link rel="stylesheet" href="style.css" />
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
          body {
          background-color: white;
          color: black;
          }
          h2 {
            background-color: Black  ;
            color: Red;
            font-size : 40px
          }
          .btn {
  border: none;
  background-color: inherit;
  padding: 20px 80px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}
.nation {
  color: white;
  background-color:dodgerblue;
}

.nation:hover {
  background-color: #ff9800;
  color: white;
}
          </style>
          </head>
          <body> 

                <a href="login.php"><button class="btn nation">Login</button></a>
          </body>
      </html>
<?php 
$user = mysqli_real_escape_string($db, $_POST["Username"]);
$password= mysqli_real_escape_string($db, $_POST["Password"]);
$resulta = mysqli_query($db,"select * from login where username = '$user' and password = '$password'");
$check_user = mysqli_num_rows($resulta);

      if($check_user > 0) {
        $row = mysqli_fetch_row($resulta);
        #echo '<h1>Logged in</h1>';
        header("Location: User.html");
      }
      else {
        echo '<h1>Wrong Username or Password</h1>';
        #window.location.href=window.location.href;
      }
?>