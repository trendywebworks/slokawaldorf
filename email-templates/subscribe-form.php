<?php 
  if(isset($_POST['email'])){ 
	$from = $_POST['email'];
	 
	// Email Receiver Address
	 
	$receiver="info@slokawaldorf.org, raj81kiran@gmail.com, kishoretrellis@gmail.com"; 
	$subject="Sloka Subscribe Form Details";

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<body>
	<table width='60%' border='0' align='left' cellpadding='0' cellspacing='0'>
	<tr>
	<td colspan='2' align='left' valign='top'><img style=' margin-top: 15px; ' src='https://slokawaldorf.in/wp-content/themes/sloka/images/apple-touch-icon-114x114.png' width='100'></td>
	</tr>
	<tr>
	<td width='50%' align='left'>&nbsp;</td>
	<td align='left'>&nbsp;</td>
	</tr>
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Subject: </td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$subject."</td>
	</tr>
	  
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Email :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$from."</td>
	</tr>
	   
	</table>
	</body>
	</html>
	";
// Always set content-type when sending HTML email
  
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <'.$from.'>' . "\r\n";
   if(mail($receiver,$subject,$message,$headers))  
   {
	   //Success Message
       echo "<script type='text/javascript'>  window.location='https://slokawaldorf.in/thank-you/'; </script>";
   }
   else
   {	
   	 //Fail Message
      echo "The message could not been sent!";
   }

}
?>
