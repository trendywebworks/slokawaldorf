<?php 

require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Google Sheets with Primo');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);
$spreadsheetId = "1yez6QptztLt6WtTMaJaRfK6cylZSf4XWPebFaTy4kUI"; // Spreadsheet ID

$range = "SlokaAdmissions"; // Sheet name


 if(isset($_POST['email'])){
	$academicyear = $_POST["academicyear"]; 
	$name = $_POST['name'];
	$birthdate = $_POST['birthdate']; 
	$schoolname = $_POST['schoolname'];
	$sibling = $_POST['sibling'];		
	$eligibleforclass = $_POST['eligibleforclass'];
	$parentname = $_POST['parentname']; 
	$parentphnumber = $_POST['parentphnumber'];
	$from = $_POST['email'];
	$currentcity = $_POST['currentcity'];  
	$alumni = $_POST['alumni'];
	$alumnidate = $_POST['alumnidate'];
	
	// Email Receiver Address
	 
	$receiver="admission@slokawaldorf.org, raj81kiran@gmail.com"; 
	$subject="Sloka Admission Form Enquiry Details";

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
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Which academic year do you seek admission for? :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$academicyear."</td>
	</tr>
	
	<tr>
	<td colspan='2' align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#825DA7; padding:7px 5px 7px 0;'> <b> Student’s Information : </b> </td> 
	</tr>
	
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Name :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$name."</td>
	</tr>
	
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Birthday :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$birthdate."</td>
	</tr>
	 
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Current School :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$schoolname."</td>
	</tr>
	 
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Does a sibling study at Sloka?  :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$sibling."</td>
	</tr>
	   
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>  Student is eligible for : </td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$eligibleforclass."</td>
	</tr> 
	
	<tr>
	<td colspan='2' align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#825DA7; padding:7px 5px 7px 0;'> <b> Parent’s information : </b> </td> 
	</tr>
	
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>  Name :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$parentname."</td>
	</tr> 
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Phone number :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$parentphnumber."</td>
	</tr>
	
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Email :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$from."</td>
	</tr>
	
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Current city or town of residence :</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$currentcity."</td>
	</tr> 
	
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> Are you an Alumni of Sloka? : </td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$alumni."</td>
	</tr> 
	
	<tr>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'> If yes, enter date : </td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$alumnidate."</td>
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
	echo "loading..";   
   }

$values = [
	[$academicyear, $name, $birthdate, $schoolname, $sibling, $eligibleforclass, $parentname, $parentphnumber, $from, $currentcity, $alumni, $alumnidate],
];

 
	
}	
	
	
//echo "<pre>";print_r($values);echo "</pre>";exit;
$body = new Google_Service_Sheets_ValueRange([
	'values' => $values
]);
$params = [
	'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append(
	$spreadsheetId,
	$range,
	$body,
	$params
);

if($result->updates->updatedRows == 1){
	 echo "<script type='text/javascript'>  window.location='https://slokawaldorf.in/thank-you/'; </script>";
} else {
	echo "The message could not been sent!";
}