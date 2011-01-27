<?php
/*Config file for AWE stats
	Instlation:
	1. Put all files into a directory on your server.
	2. Update the path to the AWStats  data files
	3. Navigate to the directory on your domain adding stats-YOUR.DOMAIN.COM to the URL
	4. Enjoy
*/
$statsURL = $_GET['stats'];
$dayR = $_GET['time'];
//if the time is not specified, then use the current month and year
if($dayR==''):
	$dayR = date('mY');
endif;

/*nordlich version number*/
$nordlich  = '0.3.1';

/*Abslolute server path to AWStats data files*/
$stsP = '/var/lib/awstats/';

$stsF = $stsP.'awstats'.$dayR.'.'.$statsURL.'.txt';
//sample AW stats output file
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