<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userinfo
 *
 * @author ROOT
 */
//if (isset($_GET['type']))
//{
 switch($_GET['type'])
 {
  case "jobcorps":
   if (isset($_GET['center'])) {include('lib/apps/userinfo/center.php');}
   else {include($apps_directory."/Job Corps/index.php");}
   break;
  
  case "resume":
   include ($apps_directory.'/resume.php');
   break;
  
  case "profile":
   include ($apps_directory."/profile.php");
  default:
   include ($apps_directory."/resume.php");
 }
//}
//else
//{
// include ($apps_directory."/resume.php");
//}

?>
