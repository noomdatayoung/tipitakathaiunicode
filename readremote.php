<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
<style> 
@font-face {
    font-family: myFirstFont;
    src: url(AngsanaBali.ttf);
	src: url(RDCHULAJARUEK.ttf);
}

div {
    font-family: myFirstFont;
}
</style>
</head>
<body>

<h1>The @font-face Rule</h1>
<pre>
<?php 
$file ='https://raw.githubusercontent.com/noomdatayoung/tipitakathaiunicode/master/Thai-Pali-UTF/01.txt';
$var=file_get_contents($file);
?>

<div><?php echo $var;?></div>

<p><b>Note:</b> Internet Explorer 8 and earlier, do not support the WOFF format (only supports EOT format).</p>
</pre>
</body>
</html>