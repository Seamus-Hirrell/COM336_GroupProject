<!DOCTYPE html>
<link rel="stylesheet" type="text/css"
                href="add.css">
<html>
  <body>
    <h3>Add Record</h3>
    <form method="post" action="addrecord.php">
        <b>Customer ID:<br></b>
        <input type="text" name="custid">
        <br>
        <b>Email Address:<br></b>
        <input type="text" name="email">
        <br>
        <b>Password:<br></b>
        <input type="text" name="pwd">
        <br>
        <b>Account Type ID:<br></b>
        <input type="text" name="acctype">
        <br><br>
        <input type="submit" name="add" value="ADD">
        <br><br><br><a class="button" href="logout.php">Logout</a>
    </form>
  </body>
</html>