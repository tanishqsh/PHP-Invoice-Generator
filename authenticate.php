<?php

$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];

if($c1=='0' && $c2 == '0' && $c3=='9')
{
  header("Location: http://binarycaves.com/admin/invoice/invoice_creator.php");
  die();
}
else {
  header("Location: http://binarycaves.com/admin/invoice");
  die();
}

?>
