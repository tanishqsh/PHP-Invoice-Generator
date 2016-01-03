<html>
<head>
  <link rel="stylesheet" href="css/invoice.css" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <meta name="Description" content="Binary Caves Invoice Generator Coded By Tanishq Sharma">
  <meta name="keywords" content="Invoice Genetor, Binary Caves, Binary Caves Web Development, Custom Invoice Generator">
  <title> <?php echo $_GET['FirstName']."'s Invoice"; ?> </title>

  <script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
  </script>
</head>
<body>
  <div class="maincontainer" id="maincontainer">
  <div class="header">
    <img src="images/bpl.png" width="100px" height="100px" alt="BinaryCaves Logo">
    <a class="invoice";> Invoice Number: <?php echo $_GET['invoiceNumber']; ?></a>
    <hr>

    <div class="detailTable">
      <p> <?php echo $_GET['FirstName']." ".$_GET['LastName']; ?>
        <br> <?php echo $_GET['ClientAdd']; ?> </p>
    </div>
    <div class="detailTable2">
      <div class="detailbox">
        <h5><u> Invoice Date </u></h5>
        <?php echo $_GET['date']; ?>
      </div>
      <div class="detailbox">
        <h5><u> Amount </u></h5>
        <?php echo $_GET['Amount']; ?>
      </div>
      <div class="detailbox">
        <h5><u> Due Date </u></h5>
        <?php echo $_GET['duedate']; ?>
      </div>
    </div>
  </div>

<div class="tablecontainer">
  <table class="TableHeading">
    <tr>
      <td> Description </td>
      <td> Total </td>
    </tr>
  </table>
    <table class="TableHeading2">
      <tr>
        <td> <?php echo $_GET['ServiceDesc']; ?> </td>
        <td> <?php echo $_GET['Amount']; ?> </td>
      </tr>
    </table>
</div>

<div class="finalsubs">
  <table>
    <tr>
      <td> Sub-Total: <?php echo $_GET['Amount']; ?> <hr> </td>
    </tr>
    <tr>
      <td> Total Amount: <?php echo $_GET['Amount'];?> <hr> </td>
    </tr>
    <tr>
      <td><br><br><br><br><br><br><hr>Signature</td>
    </tr>
  </table>
</div>


<div class="footer">
  Copyright (c) 2016 Binary Caves All Rights Reserved.
</div>
      </div>

<div class="ButtonContainer">
<input class="pButton" type="button" onclick="printDiv('maincontainer')" value="Print Invoice!" />
<div>

</body>
</html>
