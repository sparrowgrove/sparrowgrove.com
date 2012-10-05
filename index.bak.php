<?php
session_start(); //Start Sessions to store our server status value
/*
 * -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove
 *     WEBSITE: http://christopher.sparrowgrove.com
 *        NAME: Index File
 *        FILE: index.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION: This page check if the server is operational and if so passes handling to dynamic_pages
 *     LICENSE: Please Read Included License File. If One Was Not Provided E-Mail Author For A Copy.
 *   COPYRIGHT: ©Copyright 2012 - All Rights Reserved   
 *      
 */

/********CONFIGURATION FILE**********/
require_once('config/default.php');
/********CONFIGURATION FILE**********/

$server_status = $_SESSION['status']; //Set server status as a variable 

#SERVER STATUS MEANINGS & CODES
#
# Code 0: Operational
# Code 1: Under Construction 
# Code 2: Offline (Shutdown) [TODO: Beta Testing Maybe? Via IP Filter]
# Code 3: Offline (Connect Error)

 switch($server_status)
 {
  case 0: //Operating Normaly
   include('dynamic_pages.php');
   break;
  
  case 1||2||3: //Down for maintenance, construction, or offline
   include ('maintenance.php');
   break;
  
  default: //invalid or no status set
   include ('404.php');
   break;
 }

?>