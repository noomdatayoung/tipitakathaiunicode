<!DOCTYPE html>
<html>
<title> noom</title>
<meta charset="utf-8"></meta>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,target-densitydpi=160"></meta>
<meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>

<meta charset="utf-8"></meta>
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
<?
$dir    = 'tpt/29/';
function getfile($file){
	$dir    = 'tpt/29/';
	$diro    = 'tptout/';
//$file ='t01.txt';
$log = 'dhlog.txt';
$filep=$dir.$file;
$da=file_get_contents($filep,true);
echo "file:$filep";
$p = explode("\r\n", $da);
$cp= count($p);
$cpl=$cp-2;
$renew="";
$jnew="data=[";

for ($i=0;$i<$cp;$i++){
	$prow = explode("</span>", $p[$i]);
	$aa= $prow[1];	
	$adata = str_replace('  ', ' ', $aa);
	if ((strlen($adata)>1) && ($adata<>"") || ($adata<>" ") ){
		if ($adata)
	//echo $adata.strlen($adata);
	//echo "<br>";	
	$renew.=$adata."\n";
	if ($i<=$cpl) $jsend="',";else $jsend="'";
	//$jnew.="'".$p[$i].$jsend;
	$jnew.="'".$adata.$jsend;
	}
	
}
$jnew.="]";
//$jfile='tpdok.js';
//$file ='thrdat.txt';
$jfile=$diro.$file.".js";
$nfile=$diro."g".$file;
$r1=file_put_contents($nfile, $renew);
//$r2=file_put_contents($jfile, $jnew);
echo ":written $nfile , $jfile <br>";
}


$files1 = scandir($dir);
//$files2 = scandir($dir, 1);

//print_r($files1);
//print_r($files2);
$cf=count($files1);
for ($i=0;$i<$cf;$i++) {
	if (($files1[$i]!=".") && ($files1[$i]!="..")) {
		$fn=$files1[$i];
		echo $fn;
		getfile($fn);
		
		//."<br>";
	}	
}
echo $cf;