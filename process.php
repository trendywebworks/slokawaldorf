<?php

$dobDateString = $_POST['dob'];
$dobDateTime = DateTime::createFromFormat('d/m/Y', $dobDateString);
$dob = $dobDateTime->format('Y-m-d');

$alumniDateString = $_POST['alumni_date'];
if($alumniDateString) {
    $alumniDateTime = DateTime::createFromFormat('d/m/Y', $alumniDateString);
    $alumniDate = $alumniDateTime->format('Y-m-d');
}

$data = ["api_key" => "78O08NNYHRT4532FTGU",
    "student_name" => $_POST['student_name'],
    "father_name" => $_POST['father_name'],
    "mobile" => $_POST['mobile'],
    "class"  => $_POST['admission_opted_for'],
    "present_school" => $_POST['present_school'],
    "dob" => $dob,
    "source" => "2",
    "email" => $_POST['email'],
    "siblings" => $_POST['siblings'],
    "alumni" => $_POST['alumni'],
    "alumni_date" => $alumniDate,
    "enquiry_ay" => $_POST['enquiry_ay'],
];

// $data = ["api_key" => "78O08NNYHRT4532FTGU",
//     "student_name" => $_POST['student_name'],
//     "father_name" => $_POST['father_name'],
//     "mobile" => $_POST['mobile'],
//     "admission_opted_for" => $_POST['admission_opted_for'],
//     "present_school" => $_POST['present_school'],
//     "dob" => $dob,
//     "source" => $_POST['student_name'],
//     "email" => $_POST['email'],
//     "siblings" => $_POST['siblings'],
//     "alumni" => $_POST['alumni'],
//     "alumni_date" => $alumniDate,
//     "enquiry_ay" => $_POST['enquiry_ay'],
// ];


# $url = 'https://schoolknot.com/3P_API/newSlokaEnquiry.php';
$url = "https://schoolknot.com/3P_API/enquiry_api.php";
$data_string = json_encode($data);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);

print_r($result);



if(isset($_POST['email'])){
    $enquiry_ay = $_POST["enquiry_ay"];
    $name = $_POST['student_name'];
    $birthdate = $_POST['dob'];
    $schoolname = $_POST['present_school'];
    $sibling = $_POST['siblings'];
    $eligibleforclass = $_POST['admission_opted_for'];
    $parentname = $_POST['father_name'];
    $parentphnumber = $_POST['mobile'];
    $from = $_POST['email'];
    $currentcity = $_POST['city'];
    $alumni = $_POST['alumni'];
    $alumnidate = $_POST['alumni_date'];

    // Email Receiver Address
    // $receiver="revathibhaskar@gmail.com, aarti.greengables@gmail.com, prithvibhaskar14@gmail.com, raj81kiran@gmail.com, kishoretrellis@gmail.com";
    $receiver="admission@slokawaldorf.org";
    //$receiver="trendywebworks@gmail.com";
    $subject="Sloka Admission Form Enquiry Details";

    $message = "
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <table width='60%' border='0' align='left' cellpadding='0' cellspacing='0'>
        <tr>
        <td colspan='2' align='left' valign='top'><img style=' margin-top: 15px; ' src='https://sswtt.com/test/wp-content/themes/sloka/images/apple-touch-icon-114x114.png' width='100'></td>
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
        <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$enquiry_ay."</td>
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
        //Success Message
        //echo "<script type='text/javascript'>  window.location='https://sswtt.com/test/thank-you/'; </script>";
    }
    else
    {
        //Fail Message
        echo "The message could not been sent!";
    }

}