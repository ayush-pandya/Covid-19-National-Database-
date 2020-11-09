<body>
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
          th {
          background-color: #9dc3e6;
          color: #6a149b;
          text-align: center;
          font-size : 24px
          }
          td{
            text-align: right;
            font-size : 20px
          }
          h1 {
            background-color: Black  ;
            color: White;
            font-size : 40px
          }          form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
          </style>
</head>
        
</body>
		<form action="server2.php" method="post">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    <button type="submit" >Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
        </form>
          </style>
</head>
        
</body>
        <link rel="stylesheet" href="style.css" />
  </head>
  
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="log.js"></script>