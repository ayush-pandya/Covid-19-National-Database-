<?php
$q = intval($_GET['q']);
if($q == 1) {
?>
  <h1>Insert Values: </h1>
  <form action="post" action="insert.php">
  Hid<input type="text" name="Hid" id="">
  Type<input type="text" name="type" id="">
  Bed<input type="number" name="bed" id="">
  Address<input type="text" name="addr" id="">
  PIN<input type="number" name="pin" id="">
  State<input type="text" name="state" id="">
  Contact<input type="number" name="contact" id="">
  Pdc<input type="number" name="pdc" id="">
 
  <input type="submit" value="submit">
 
  </form>
  <!-- <script>
    window.location.href = 'insert.php';
  </script> -->
  <?php
  
}
?>