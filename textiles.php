<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>textiles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="master.css">
</head>
<body>
<?php if(isset($_REQUEST['sitting_num'])){$sitting_num=$_REQUEST['sitting_num'];}?>
<?php
$sitting_num=$_GET['sitting_num'];
$file = fopen("grades/textiles.csv","r");

while(! feof($file))
  {
  $main=(fgetcsv($file));list($A,$B)=$main;if('code'==$B){break;}
  }
while(! feof($file))
  {
  $code=(fgetcsv($file));list($A,$B)=$code;if($sitting_num==$B){break;}
  }
//$data=json_encode($code);echo $data;
fclose($file);
?>

<fieldset><body>
<header class="head" style="felx">
  <img src="logo.png" alt="logo">
  <h3>Borg Al-Arab Technological University</h3>
</header></body></fieldset>

<div class="department"><h4><b>textiles department:</b></h4></div>

<table>
  <?php
 for($i=1; isset($main[$i]) ;$i++){
  echo "<tr>
  <td><b>$main[$i]</b></td>
  <td>$code[$i]</td>
</tr>";
}?>
</table>
</body></html>