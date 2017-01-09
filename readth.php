<!DOCTYPE html>
<html>
<head>
  <title> noom</title>
  
<meta charset="utf-8"></meta>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,target-densitydpi=160"></meta>
<meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
<style>
@font-face {
 font-family: sepe;
 src: url("AngsanaBali.ttf") /* TTF file for CSS3 browsers */
}

#sepe {   font: 400 19px/1  'sepe';}
body {Font: 400  26px/1  'sepe'; color:black; #008080;#29646f;}

textarea  ,pre
{  
   font-family:"Times New Roman", Times, serif;  
   font-family: sepe;
   font-size: 29px;   
}
</style>
<body>

<?
echo $var;
$datee= date('Y-m-d H:i:s');
$file ='010001r.txt';
$var=file_get_contents($file);
echo "<pre>".$var."</pre>".$datee;

?>

