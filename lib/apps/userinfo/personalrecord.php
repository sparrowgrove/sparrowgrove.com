<?php
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

if (isset($_GET['info']))
{
 $info = $_GET['info'];
 switch($info)
 {
  case "status":
   echo "<span id='label1' style='position:relative; top:5px; left:0px;'>Current Enrolment:</span>
         <span id='value1' style='position:relative; top:6px; left:0px;'> Active Student [Weber Basin Job Corps]</span> 
         <p />
         <span id='label2' style='position:relative; top:10px; left:0px;'>Previous Enrollment:</span>
         <span id='value2' style='position:relative; top:10px; left:0px;'> Terminated/Transfer [Collbran Job Corps]</span>";
   break;
  
  case "leaderships":
   echo "<span id='label1' style='position:relative; top:5px; left:0px;'>Current Leaderships:</span>
         <span id='value1' style='position:relative; top:6px; left:0px;'> Recreation Aid</span>";
   break;
  
  default:
   echo "Select Info Above";
   break;
 }
}


?>

