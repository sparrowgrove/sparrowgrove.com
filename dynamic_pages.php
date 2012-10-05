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
require_once('config/default.php');
/********CONFIGURATION FILE**********/

/*******DIRECTORY CONFIG***********/
$apps_directory = "apps/";
$pages_directory = "pages/";
/*******DIRECTORY CONFIG***********/

/* PAGE REQUEST CONFIG */
$valid_pages = scandir($pages_directory);
unset ($valid_pages[0], $valid_pages[1]);



/***************BEGIN APPLICATION******/
if (isset($_GET['app']))
{
 switch($_GET['app'])
 {
  case "userinfo":
   if (isset($_GET['type'])) { include ("lib/apps/userinfo/type.php"); }
   else {include($apps_directory."/resume.php");}
   exit();
   break;
  
  case "login";
   include ($apps_directory."/login.php");
   exit();
   break;
  
  case "cleanpc":
   include ($apps_directory."/cleanpc.php");
   exit();
   break;
  
  case "blog":
   include($apps_directory.'/blog/index.php');
   exit();
   break;
  
  case "list":
   echo "<center>";
   echo "LIST OF ALL APPLICATIONS:<BR />
         1. User Info {userinfo}<BR />
         2. Login {login}<BR />
         3. Clean PC {cleanpc}<BR />
         4. Blog {blog}<BR />
         5. Updates {updates}<BR />";
   echo "</center>";
   break;
  
  default:
   echo "<p style='margin-top: 50px; margin-left: 550px;'>Please Select A Valid Application.</p>";
   break;

 }
 exit();
}
else if (isset($_GET['page']))
{
 $unsanitized_str = $_GET['page']; 
 $pg_request = strip_tags($unsanitized_str);
 if (in_array($pg_request.".php", $valid_pages))
 {
  include ($pages_directory."/".$pg_request.".php"); #USER REQUESTED PAGE
 }
 else
 {
  include ($pages_directory."/404.php"); #DEFAULT HOME PAGE
 }
}
else
{
 include ($pages_directory."/home.php"); #DEFAULT HOME PAGE
}

?>