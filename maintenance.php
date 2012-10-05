<?php

/////PLACE HOLDER TO TURN OFF ERROR REPORTING.
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     WEBSITE: http://christopher.sparrowgrove.com
 *        NAME: Index File
 *        FILE: index.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: This is a Test
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2012 - All Rights Reserved   
 *      
 */

/********CONFIGURATION FILE**********/
//require_once('config/config.php');
/********CONFIGURATION FILE**********/
$server_status = $_SESSION['status'];
$status_msg = $_SESSION['status_msg'];

switch($server_status)
{
 case 0:
  echo "SERVER STATUS: Online<BR />";
  if(isset($status_msg)) {echo $status_msg;} else{echo $_SERVER['SERVER_NAME'].' is operating normaly.';}
  break;
  
 case 1:
  echo "SERVER STATUS: Under Construction<BR />";
  if(isset($status_msg)) {echo $status_msg;} else{echo $_SERVER['SERVER_NAME'].' is under construction.';}
  break;
 
 case 2:
  echo "SERVER STATUS: Offline<BR />";
  if(isset($status_msg)) {echo $status_msg;} else{echo $_SERVER['SERVER_NAME'].' is currently offline';}
  break;
  
 case 3:
  echo "SERVER STATUS: Ofline. Connection Error<BR />";
  if(isset($status_msg)) {echo $status_msg;} else{echo $_SERVER['SERVER_NAME'].' has malfunctioned. Please contact an Admin about this error.';}
  break;
  
 default:
  echo "There is a problem with the server. contact an amdin about this error.";
}



?>