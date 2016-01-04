<html>
<head>
  <link rel="stylesheet" href="invoice.css" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <meta name="Description" content="Binary Caves Invoice Generator Coded By Tanishq Sharma">
  <meta name="keywords" content="Invoice Genetor, Binary Caves, Binary Caves Web Development, Custom Invoice Generator">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo $_POST['FirstName']."'s Invoice"; ?> </title>

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
<body onload="printDiv('maincontainer')">
  <div class="maincontainer" id="maincontainer">
  <div class="header">
    <img src="bpl.png" width="100px" height="100px" alt="BinaryCaves Logo">
    <a class="invoice";> Invoice Number: <?php echo $_POST['invoiceNumber']; ?></a>
    <hr>

    <div class="detailTable">
      <p> <?php echo $_POST['FirstName']." ".$_POST['LastName']; ?>
        <br> <?php echo $_POST['ClientAdd']; ?> </p>
    </div>
    <div class="detailTable2">
      <div class="detailbox">
        <h5><u> Invoice Date </u></h5>
        <?php echo $_POST['date']; ?>
      </div>
      <div class="detailbox">
        <h5><u> Amount </u></h5>
        <?php echo $_POST['Amount']; ?>
      </div>
      <div class="detailbox">
        <h5><u> Due Date </u></h5>
        <?php echo $_POST['duedate']; ?>
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
        <td> <?php echo $_POST['ServiceDesc']; ?> </td>
        <td> <?php echo $_POST['Amount']; ?> </td>
      </tr>
    </table>
</div>

<div class="finalsubs">
  <table>
    <tr>
      <td> Sub-Total: <?php echo $_POST['Amount']; ?> <hr> </td>
    </tr>
    <tr>
      <td> Total Amount: <?php echo $_POST['Amount'];?> <hr> </td>
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

</body>
</html>
