<?php
session_start();
$db = mysqli_connect('localhost','root','','covid-19 database');
$Pin = mysqli_real_escape_string($db, $_POST["Pin"]);
echo 'The Pin you Entered is: '. $Pin."<br>";
 
if(empty($Pin)){}
 
$user_check_query = "SELECT * FROM hospital WHERE PIN = $Pin";
 
$result = mysqli_query($db, $user_check_query);
    if ($result = mysqli_query($db, $user_check_query)) {
        sprintf ("%s \t%s %s %s %s %s %s %s","HOSPITAL_ID    ","TYPE     ","BED_AVL      ","ADDRESS      ","PIN      ","STATE        ","CONTACT      ","COST(PERDAY)");
        printf("<br>");
        while ($row = mysqli_fetch_row($result)) {
          echo "tr td". $row["HOSPITAL_ID"] . "/td td".$row["part_price"]. "/td /tr";
        }
        mysqli_free_result($result);
      }
?>