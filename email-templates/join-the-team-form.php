<?php 
   if(isset($_POST['email'])){
	$name = $_POST["name"]; 
	$from = $_POST['email'];
	$mobilenumber = $_POST['mobilenumber'];  
	$interested = $_POST['interested'];
	 
	// Email Receiver Address
	$receiver="careers@slokawaldorf.org, raj81kiran@gmail.com, kishoretrellis@gmail.com";
	// $receiver="kishoretrellis@gmail.com"; 
	$subject="Sloka Careers Enquiry Form Details";
	
	//Get uploaded file data using $_FILES array 
    $tmp_name    = $_FILES['my_file']['tmp_name']; // get the temporary file name of the file on the server 
    $filename    = $_FILES['my_file']['name'];  // get the name of the file 
    $size        = $_FILES['my_file']['size'];  // get size of the file for size validation 
    $filetype    = $_FILES['my_file']['type'];  // get type of the file 
	
	$handle = fopen($tmp_name, "r");  // set the file handle only for reading the file 
    $content = fread($handle, $size); // reading the file 
    fclose($handle);                  // close upon completion 
  
    $encoded_content = chunk_split(base64_encode($content)); 
  
    $boundary = md5("random"); // define boundary with a md5 hashed value 
  
  

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<body>
	<table width='50%' border='0' align='left' cellpadding='0' cellspacing='0'>
	<tr>
	<td colspan='2' align='center' valign='top'><img style=' margin-top: 15px; ' src='https://slokawaldorf.in/wp-content/themes/sloka/images/apple-touch-icon-114x114.png' width='100'></td>
	</tr>
	<tr>
	<td width='60%' align='left'>&nbsp;</td>
	<td align='left'>&nbsp;</td>
	</tr>
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Subject: </td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$subject."</td>
	</tr>
	<tr>
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Name :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$name."</td>
	</tr>
	
	 
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Email : </td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$from."</td>
	</tr>
	 
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Mobile Number : </td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$mobilenumber."</td>
	</tr>
	 
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> What position are you interested in? :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$interested."</td>
	</tr>
	     
	</table>
	</body>
	</html>
	";
	
	// Always set content-type when sending HTML email
  
	$headers = "MIME-Version: 1.0" . "\r\n";
	//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers .= 'From: <'.$from.'>' . "\r\n";
	$headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type 
    $headers .= "boundary = $boundary"; //Defining the Boundary 


	$body = "--$boundary\r\n"; 
    $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";  
    $body .= chunk_split(base64_encode($message));  
          
    //attachment 
    $body .= "--$boundary\r\n"; 
    $body .="Content-Type: $filetype; name=".$filename."\r\n"; 
    $body .="Content-Disposition: attachment; filename=".$filename."\r\n"; 
    $body .="Content-Transfer-Encoding: base64\r\n"; 
    $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";  
    $body .= $encoded_content; // Attaching the encoded file with email
	
	
   if(mail($receiver,$subject,$body,$headers))  
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
