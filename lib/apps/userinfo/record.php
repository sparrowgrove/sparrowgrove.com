<?PHP
switch($_GET['record'])
{
 case "writeups":
  include ($apps_directory."/Job Corps/Weber Basin/writeups.php");
  break;
 
 default:
  include($apps_directory."/Job Corps/Weber Basin/writeups.php");
  break;
}
?>