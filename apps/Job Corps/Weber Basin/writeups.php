<!DOCTYPE html>
<html>
 <head>
  <meta name="author" content="Christopher Dalyan Sparrowgrove" />
  <meta name="description" content="The professional webpage of Christopher Sparrowgrove which contains background information, resume, coverletters, recomendations, and more" />
  <meta name="keywords" lang="en-us" content="christopher sparrowgrove, professional, recomendation, resume, christopher sparrowgrove facebook, myspace"
  <meta name="robots" content="index,follow" />
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <!-- 
   *      Author: Christopher Dalyan Sparrowgrove
   *     Created: September 1, 2012 6:18pm MT
   *     Updated: September 14, 2012 4:19pm MT
   * Description: Professional Webpage
  -->
  <link rel="stylesheet" type="text/css" href="style.css" />
  
  
  <?PHP include ('internet-blackout.php'); ?>
 </head>
 
 <body>
  <div id="container">
   
   <div id="header">
    <img id="img" title="Fireworks" src="images/fireworks.jpg" />
   </div>
   
   <div id="nav"><a href="?page=home">Home</a> | <a href="?page=background">Background</a> | 
    <a href="?page=resume">Resume</a> | <a href="?page=lsa">Leaderships & Awards</a> 
   </div>
   
   <div id="content">
    <?PHP
    if (!mysql_connect($databasehost, $databaseuser, $databasepassword)) {die("Failed to Connect. Reason: " . mysql_error());}
    if (!mysql_select_db($database)) {die("Failed To Select. Reason: " . mysql_error());}
    ?>
    <div id="basicinfo">
     <img id="profilepic" title="Profile Picture" src="images/IMG_0003.JPG">
     <span id="name">NAME:
      <?PHP
      $results = mysql_query('SELECT name FROM professional');
      if (!$results) {die('Something Went Wrong. Reason: ' . mysql_error());}
      echo mysql_result($results, 0); //
      ?> 
     </span>
     <span id="age">
      <BR />
      <?PHP
      $results = mysql_query('SELECT dob FROM professional');
      if (!$results) {die('Something Went Wrong. Reason: ' . mysql_error());}
      $dob =  mysql_result($results, 0);
      //Calculate the age 
      $yearsold = new DateTime($dob); 
      $interval = $yearsold->diff(new DateTime);
      echo "AGE: ".$interval->y." Years Old"; 
      ?>
     </span>
     <span id="location">
      <BR />
      LOCATION: 
      <?PHP
      $results = mysql_query('SELECT location FROM professional');
      if (!$results) {die('Something Went Wrong. Reason: ' . mysql_error());}
      echo mysql_result($results, 0);
      ?>
     </span>
     <span id="travelrange">
      <BR />
      TRAVEL: 
      <?PHP
      $results = mysql_query('SELECT travel_range FROM professional');
      if (!$results) {die('Something Went Wrong. Reason: ' . mysql_error());}
      echo "Within: " . mysql_result($results, 0) . " Miles";
      ?>
     </span>  
     <span id="drivers_license">
      <BR />
      LICENSE: 
      <?PHP
      $results = mysql_query('SELECT license FROM professional');
      if (!$results) {die('Something Went Wrong. Reason: ' . mysql_error());}
      echo mysql_result($results, 0);
      ?>
     </span>
     <span id="citizen">
      <BR />
      CITIZEN: 
      <?PHP
      $results = mysql_query('SELECT citizen FROM professional');
      if (!$results) {die('Something Went Wrong. Reason: ' . mysql_error());}
      echo mysql_result($results, 0);
      ?>
     </span>
     <span id="lastupdate">
      <BR />
      LASTUPDATE: 
      <?PHP
      $results = mysql_query('SELECT lastupdate FROM professional');
      if (!$results) {die('Something Went Wrong. Reason: ' . mysql_error());}
      echo mysql_result($results, 0);
      ?>
     </span>
     <span id="links">
      <a href="?page=pics">More Pics</a> | 
      <a href="?page=" onclick="alert('Currently There are no Videos');">Videos</a>
     </span>     
    </div>
    <div id="contact">
     <div id="contactnave">
      <span id="phone"><a href="?page=home&contacttype=phone">Phone</a></span> |
      <span id="email"><a href="?page=home&contacttype=email">E-Mail</a></span> | 
      <span id="im"><a href="?page=home&contacttype=im">Instant Message</a></span> |
      <span id="address"><a href="?page=home&contacttype=postal">Postal Address</a></span> |
      <span id="fb"><a href="?page=home&contacttype=fb">Facebook</a></span> | 
      <span id="li"><a href="?page=home&contacttype=li">Linkedin</a></span>
     </div>
     <hr />
     <?PHP require($pages_directory."/contact.php"); //Dynamic Contact Us App ?>
    </div>
    <div id="recomendations" style="width: 980px; height: 600px; padding-top: 25px;">
     <span id="jcdt_title"> Webber Basin Job Corps Disciplinary Record </span>
     <table id="table" style="height: auto;">
      <?PHP
      if (!mysql_connect($databasehost, $databaseuser, $databasepassword)){die($status='3' . mysql_error());}
      if (!mysql_select_db("wbjct")) {die("ERROR: " . mysql_error());}
      ?>
      <tr id="tr">
       <td id="date" style="font: bold large 'Times New Roman', sans-serif;">Date</td>
       <td id="cssv" style="font: bold large 'Times New Roman', sans-serif;">CSS Violation</td>
       <td id="desc" style="font: bold large 'Times New Roman', sans-serif;">Description</td>
       <td id="apl" style="font: bold large 'Times New Roman', sans-serif;">Appeal</td>
      </tr>
       <?PHP
       if (isset($_GET['p'])) 
       { 
        $p = $_GET["p"]; 
       } 
       else 
       { 
        $p= "1"; 
       }; 
       //USE SWITCH TO CLEAN UP
       
       $start_from = ($p-1) * 5; 

       $jcdtquery = mysql_query("SELECT * FROM writeups ORDER BY date DESC LIMIT $start_from, 5");
       while ($row = mysql_fetch_assoc($jcdtquery))
       {
       ?>
     <tr>
      <td id="date"><?PHP echo $row["date"]; ?></td>
      <td id="cssv"><?PHP echo $row["css_violation"]; ?></td>
      <td id="desc"><?PHP echo $row["description"]; ?></td>
      <td id="appeal"><?PHP echo $row["appeal"]; ?></td>
     </tr>
     <?php 
       }; 
     ?> 
     </table>
     
     <?PHP
     echo "<span id=\"pages\">&nbsp;&nbsp;Pages: ";
     $sql = mysql_query("SELECT COUNT(css_violation) FROM writeups"); 
     $row = mysql_fetch_row($sql);
     $total_records = $row[0];
     $total_pages = ceil($total_records / 5);
     for ($i=1; $i<=$total_pages; $i++)
     {
      echo "<a href=?app=userinfo&type=jobcorps&center=weberbasin&record=writeups&p=".$i."'>".$i."</a>&nbsp;|&nbsp;";
     };
     echo "&nbsp;</span>";
     ?>
     <span style="margin-left: 30px; font-size: normal;"><span style="font-size: large; font-weight: bold;">*NOTE: </span> 
              If no records are displayed it is due to Database connection error or No writeups have been issued. 
     </span>
    </div>
   
   <div id="footer" style="margin-top: -145px;">&copy; Copyright 2012 All Rights Reserved - Christopher Sparrowgrove
    <span id="design"> &nbsp;Powered by: <a href="http://christopher.sparrowgrove.com/?page=design">Code Deck 2.0</a>&nbsp; </span>
   </div>
  </div>
 </body>
</html>