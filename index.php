<?php
 ?>

<html>
<head>
  <link rel="stylesheet" href="login.css" type="text/css">
  <title> Authentication </title>

</head>
<body>
  <div class="maincontainer">
    <div class="imagecontainer">
    <img src="tp.png" width="200px" height="200px"/>
  </div>

  <div class="formcontainer">
    <form action="authenticate.php" method="post">
      <input class="inputLayout" name="c1" type="text" placeholder="0" maxlength="1" max="9"/>
      <input class="inputLayout" name="c2" type="text" placeholder="0" maxlength="1" max="9"/>
      <input class="inputLayout" name="c3" type="text" placeholder="0" maxlength="1" max="9"/>
      <br>
      <button class="submitButton" type="submit" value="Submit">
    </form>
  </div>
  </div>
</body>
</html>
