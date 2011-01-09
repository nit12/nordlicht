<?php
/*Config file for AWE stats*/
$statsURL = $_GET['stats'];
$dayR = $_GET['time'];
//if the time is not specified, then use the current month and year
if($dayR==''):
	$dayR = date('mY');
endif;

/*nordlich version number*/
$nordlich  = '0.2';

/*Abslolute server path to AW stats stats files*/
$stsP = '/var/lib/awstats/';

$stsF = $stsP.'awstats'.$dayR.'.'.$statsURL.'.txt';
//sample AW stats output file
//$stsF = 'sts/awstats122010.test.deadlycomputer.com.txt';
if(file_exists($stsF)):
	$sts = file($stsF);
	require('funn/funnns.php');
	require('funn/metadata.php');
	require('funn/data.php');
	require('funn/chartmeta.php');
	require('tableArgs.php');
	$stsList = fileList($stsP);
else:
	$sts = false;
endif;
?>