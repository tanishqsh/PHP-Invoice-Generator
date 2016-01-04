<!DOCTYPE html>

<!-- Love, Tanishq! -->

<html>
<head>
  <link rel="stylesheet" href="css/binaryStyle.css" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <meta name="Description" content="Binary Caves Invoice Generator Coded By Tanishq Sharma">
  <link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <meta name="keywords" content="Invoice Genetor, Binary Caves, Binary Caves Web Development, Custom Invoice Generator">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Invoice Generator - Binary Caves </title>
</head>

<body>
  <div class="holder">
    <div class="header">
      <div class="headerblock">
      </div>
      <div class="textblock">
        <h1> Invoice Generator </h1>
      </div>
    </div>
    <div class="innerHolder">
    <div class="formcontainer">
    <form action="generated/invoice.php" method= "POST" class="binaryForm">
      <div class="fieldContainer">
      First Name:
      <input name="FirstName" placeholder="Tanishq" class="inputLayout">
    </div>
    <div class="fieldContainer">
    Last Name:
    <input name="LastName" placeholder="Sharma" class="inputLayout">
  </div>
    <div class="fieldContainer">
    Invoice No.:
    <input name="invoiceNumber" placeholder="eg.3010" class="inputLayout">
  </div>
  <div class="fieldContainer">
  Billing Date:
  <input name="date" placeholder="DD-MM-YY (Important)" class="inputLayout">
</div>
<div class="fieldContainer">
Bill DueOn.:
<input name="duedate" placeholder="DD-MM-YY (Important)" class="inputLayout">
</div>
<div class="fieldContainer">
  ServDesc--.:
<input name="ServiceDesc" placeholder="Business Portfolio with ..." class="inputLayout">
</div>
<div class="fieldContainer">
Bill Amount
<input name="Amount" placeholder="200000" class="inputLayout">
</div>
  <div class="fieldContainer">
   Phone No..:
  <input name="Phone" placeholder="9819075165" maxlength="10"; class="inputLayout">
</div>
      <div class="fieldContainer">
        Address --- :
      <input name="ClientAdd" placeholder="H1/1103, Phase 2, Bhoomi Park" class="inputLayout">
    </div>
    <button type="submit" class="submitButton">  </button>
    </form>
  </div>
</div>
  </div>

  <div class="footer">
    Another step in the ladder to success!
  </div>
</body>

</html>
