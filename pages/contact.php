<?php
$valid_contact = array('phone', 'email', 'im', 'postal', 'fb', 'li');

if (isset($_GET['contacttype']))
{
 $contacttype = $_GET['contacttype'];
 if (in_array($contacttype, $valid_contact))
 {
  $contacttype= $_GET['contacttype'];
  switch ($contacttype)
  {
   case 'phone':
    echo "<span id='contactnote'>NOTE: Please keep all communication professional. Please No Spam</span> 
           <P>
            <span id='label1'>HOME: 
             <span id='value1'> Not Listed </span>
            </span>
           </P>
           <P>
            <span id='label2'>CELL PHONE:
             <span id='value2'>(360) 000-0000 (Private)</span>
            </span>
           </P>
           <P>
            <span id='label3'>CELL PHONE (Google Voice):
             <span id='value3'>(210) 645-5037 (All Calls Forward To Home & Cell)</span>
            </span>
           </P>
           <hr />
            <span id='contactcopyright'>&copy; Copyright 2012 All Rights Reserved - Christopher Sparrowgrove</span>
          
         ";
    break;
   case 'email':
    echo "<span id='contactnote'>NOTE: Please keep all communication professional. Please No Spam</span> 
           <P>
            <span id='label1'>PERSONAL: 
             <span id='value1'>csparrowgrove@gmail.com</span>
            </span>
           </P>
           <P>
            <span id='label2'>PROFESSIONAL:
             <span id='value2'>christopher@sparrowgrove.com</span>
            </span>
           </P>
           <P>
            <span id='label3'>MOBILE:
             <span id='value3'>chrisismyna@me.com</span>
            </span>
           </P>
           <hr />
            <span id='contactcopyright'>&copy; Copyright 2012 All Rights Reserved - Christopher Sparrowgrove</span>
          
         ";
    break;
   
   case 'im':
    echo "<span id='contactnote'>NOTE: Please keep all communication professional. Please No Spam</span> 
           <P>
            <span id='label1'>GMAIL: 
             <span id='value1'>csparrowgrove</span>
            </span>
           </P>
           <P>
            <span id='label2'>YAHOO:
             <span id='value2'>chris_sparrowgrove</span>
            </span>
           </P>
           <P>
            <span id='label3'>LIVE IM::
             <span id='value3'>csparrowgrove@gmail.com</span>
            </span>
           </P>
           <hr />
            <span id='contactcopyright'>&copy; Copyright 2012 All Rights Reserved - Christopher Sparrowgrove</span>
          
         ";
    break;
   
   case 'postal':
    echo "<span id='contactnote'>NOTE: Please keep all communication professional. Please No Spam</span> 
           <P>
            <span id='label1'>HOME ADDRESS: 
             <span id='value1'>Christopher Sparrowgrove</span>
            </span>
           </P>
           <span>
            <span id='label2'>
             <span id='value2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             1239 Lion Forest,</span>
            </span>
           </span>
           <P>
            <span id='label3'>
             <span id='value3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             San Antonio, TX, 78251</span>
            </span>
           </P>
           <hr />
            <span id='contactcopyright'>&copy; Copyright 2012 All Rights Reserved - Christopher Sparrowgrove</span>
          
         ";
      break;
     
   case 'fb':
    echo "Start A Timer In Javascript and Document.write Here that a new window will be opened";
    //header('LOCATION: http://facebook.com/christopher.sparrowgrove/');
    break;
   
   case 'li':
    echo "Start A Timer In Javascript and Document.write Here that a new window will be opened";
    //header('LOCATION: http://linkedin.com/b1ub3rry/');
    break;
  }
 }
  else {echo "Please Select A Valid Method of Contact";}
 }
 else {echo "Select a method of contact above";}
?>
