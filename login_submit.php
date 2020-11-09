<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").html("Hello <b>world!</b>");
  });
});
</script>
</head>
<body>

<button>National Register</button>
<button>Qurantine Register</button>
<button>Hospitals</button>

</body>
</html>
<?php
session_start();
$db = mysqli_connect('localhost','root','','covid-19 database');
printf("%s","asfjk jasfj");

?>