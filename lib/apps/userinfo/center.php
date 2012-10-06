<?PHP
switch($_GET['center'])
{
 case "weberbasin":
  if(isset($_GET['record'])) {include('lib/apps/userinfo/record.php');}
  else {//include($apps_directory."/Job Corps/Weber Basin/index.php");
       HEADER('LOCATION: http://localhost/?app=userinfo&type=jobcorps&center=weberbasin&record=writeups');
  }
  break;
 
 case "collbran":
  echo "Collbran Page Has Not Been Set Up Yet";
  break;
}


?>