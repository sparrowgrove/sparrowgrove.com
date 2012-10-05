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
  <?PHP
  #FORM PROCESSOR
  if ($_SERVER['REQUEST_METHOD'] == "POST")
  {
   echo "done";
  }
  
  ?>
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
      //$dob =  mysql_result($results, 0);
      //$age = str_split($dob, $split_length = "5"); Get only part of the string and do a math count
      echo "AGE: 23 Years Old"; 
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
    <div id="recomendations">
     <div id="recomendationstitle">Recomedations: <BR></span>
     <BR />
     <div id="comments">
      "Chris is Awesome! This is a test of word wrap and comments" ~ Owner, 3X Security, LLC, Christopher Sparrowgrove
     </div>
     <div id="comments">
      "Chris Is The Best Worker I Know. This Is A TEST" ~ District Manager, Noerr Programs, Nicole Hoyt Fey
     </div>
     <div id="comments">
      "Christopher is a hard working Employee and I am honored to work with him. This Is a Test Message" ~ Supervisor, SeaWorld: San Antonio, Erma Martinez
     </div>
     <div id="comments">
      "Christopher is an employee whom brings motivation and carisma to any team he works with. I enjoyed working with him. test" ~ President,  Forbes Media,  Micheal Doe
     </div>
     <div id="comments">
      "Christopher has come a long way from what I have seen. I am glad to have him as a peer and co worker" ~ Owner, Sharking Inc, Beta Tester
     </div>
    </div>
     <div id="form">
      Recomendation: <BR />
     <form name="Recomendation Form" action="" method="post">
      <span id="inputname">
       NAME: <input type="text" id="inputname" value="John Doe" />
      </span>
      <span id="jobtitle">
       TITLE: <input type="text" id="inputjobtitle" value="Manager" />
      </span>
      <span id="company">
       COMPANY: <input type="text" id="inputcompany" value="Company X, Inc" />
      </span>
      <BR />
      <span id="comment">
       COMMENT: <input type="text" id="inputcomment" value="Great Worker!" size="56"/>
      </span>
      <span id="submit">
       <input id="submit" type="submit" value="submit" />
      </span>
     </form>
     </div>
   </div>
   
   <div id="footer">&copy; Copyright 2012 All Rights Reserved - Christopher Sparrowgrove
    <span id="design"> Webdesign by: <a href="http://christopher.sparrowgrove.com/?page=design">Sparrowgrove Designs</a></span>
   </div>
  </div>
 </body>
</html>