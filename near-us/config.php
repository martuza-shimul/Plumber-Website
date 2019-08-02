<?php ob_start(); session_start();   





// Need to change the below part

 
 

 
$seturlsd="http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


  $actual_link = "$_SERVER[HTTP_HOST]";

$doaminids=explode(".",$actual_link);


 $project_id=$doaminids[0];
 
 
 
error_reporting(0);
ini_set('memory_limit', '-1');
ini_alter('date.timezone','America/Los_Angeles');
$date=date('Y-m-d');
$IP=$_SERVER['REMOTE_ADDR'];
$datetime=date('Y-m-d H:i:s');
$time=date('H:i:s');

function mydate($date)
{

$date_Epl=explode('-',$date);
$datearrey=array('NONE','Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sep','Oct','Nov','Dec');
$dateday=$date_Epl[1];
$dateday = ltrim($dateday, '0');
echo $date_Epl[2]."-".$datearrey[$dateday]."-".$date_Epl[0];

}
 
 

 
 
$ApiURL='http://imworkers.com/Gmaps-Robo-Pilot-App/capi/Apiclients.php?apikey='.$project_id.'&f=';

 
?>
