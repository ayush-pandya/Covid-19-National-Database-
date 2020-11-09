<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

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
 
  <button type="submit">Submit</button>
 
  </form>

  <!-- <script>
    window.location.href = 'insert.php';
  </script> -->

</body>
</html>