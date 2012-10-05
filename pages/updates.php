<?php

?>
<!DOCTYPE html>
<html>
 <head>
  <style>
  h1 {text-align:center;}
  #container {position:absolute; left:350px; top:25px; heigth:200px; width:600px; background-color:grey; -moz-box-shadow: 20px;}
  #version {font-size: large;}
  ul {font-size: small; font-weight: bold;}
  ol {font-weight: lighter;}
  </style>
 </head>
 
 <body>
  <div id="container">
  <h1>UPDATES TO WEBSITE CODE</h1> 
  <BR />
  <p id="version">VERSION: 3.0.0 (9/23/2012)</p>
  <ul>
   <li>New Features
    <ol>
     <li>Online Resume - A New app has been created for the purpose of displaying an online resume.</li>
     <li>Social Networking Profile - A social networking app has been created for displaying some of my updates on my website</li>
     <li>Job Corps ESP - An Evaluation of My Progress at Job Corps is now available online for everyone to see</li>
    </ol>
   </li>
   
   <li>BUG FIXES
    <ol>
     <li>CSS Fixes: In switching around pages and apps some CSS code was broken. We have fixed some of them</li>
    </ol>
   </li>
   
   <li>SECURITY UPDATES
   <ol>
    <li>User Input Sanitation  - User Input Sanitation has been removed from app request until we are done beta testing some new apps. No Logins except demo work in beta so your info is safe.</li>
   </ol>
  </li>
  </ul>
  <BR />
  <BR />
  <p id="version">VERSION: 2.1.0 (9/15/2012)</p>
  <ul>
   <li>New Features
    <ol>
     <li>Contact Bar: Contact Bar now contains a dynamic contact app. Simply click a method of contact. This system will be replaced with an AJAX version in the future</li>
     <li>About Me: A new about me section was added. This is where I will write a self evaluation.</li>
     <li>Admin Control Pannel: A new control pannel app was constructed for ease of control for server settings and other controls. More on Control Pannel Later</li>
    </ol>
   </li>
   
   <li>BUG FIXES
    <ol>
     <li>CSS Fixes: There was an error in coding something so I started from scratch and recoded the source.</li>
    </ol>
   </li>
   
   <li>SECURITY UPDATES
   <ol>
    <li>User Sanitation: User sanitation was added to the dynamic portion of the website for added security and to most apps. More apps coming soon after fixing compabaility.</li>
   </ol>
  </li>
  </ul>
  <BR />
  <p id="version">VERSION: 2.0.1 (9/2/2012)</p>
  <ul>
   <li>New Features
    <ol>
     <li>Redesign: Website is now an online resume. Dynamic Content and Information is coded into the website as a web application</li>
    </ol>
   </li>
   
   <li>BUG FIXES
    <ol>
     <li>Internet Explorer Compatibility: The website is fully Compatible with Internet Explorer 9 and Above</li>
    </ol>
   </li>
   
   <li>SECURITY UPDATES
   <ol>
    <li>PHP5.3 Upgrade: The Website is fully programmed in PHP 5.3 which adds more security to the server from malicious attacks.</li>
   </ol>
  </li>
  </ul>
  
  <p id="version">VERSION: 1.0.1 (8/5/2012)</p>
  <ul>
   <li>NEW FEATURES
    <ol>
     <li>Index Page: Added a system check for a server status. If one is not provided for some reason an Error message is triggered and script is exit.
         Also if the server is set to offline for maintenance this will also trigger one of the apropreate error messages.</li>
    </ol>
   </li>
   
   <li>BUG FIXES
    <ol>
     <li>Index Page Line 24: Added a break to the last switch object to make code valid and prevent adding of malious additions</li>
     <li>MSQLi Configuration Script Change. The source file will set the server status to Offline by default if failure to connect.</li>
     <li>Home Page Line 47 of Pages dir: Added dynamic hyperlink to Home link.</li>
    </ol>
   </li>
   <li>Security Updates
    <ol>
     <li>User Input Validation is checked when submit ?page= variable page request  </li>
    </ol>
   </li>
  </ul>
  
  <p id="version">VERSION: 1.0</p>
  
  Version Tracking: First Number is when Something Visually changes. Second number is when something programicly changes. Third number is when an error is corrected...unless it is a major error.
  </div>
 </body>
</html>
