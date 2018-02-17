<?php
if ($_POST["email"]) {

    $recipient = "info@2apples.com.au";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $enquiry = $_POST["enquiry"];
    $enquiryDetails = $_POST["enquiryDetails"];

    $mailBody="Name: $name \nEmail: $email \nPhone: $phone \nCompany: $company \nEnquiry: $enquiry \nDetails: $enquiryDetails";


    mail($recipient, $subject, $mailBody, "From: $name: $email");

    $thankYou="<p>Thanks $name, your enquiry has successfully been submitted!</p>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Software and e-commerce development solution</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />



</head>
<body>

<div id="top_line"></div>
<div id="container" align="center">
<div id="page">
<div id="header">
				<div id="header_left"><a href="index.html"><img src="images/2apples_software_logo.png" width="115"/></a></div>
<div id="header_right">

    <div class="top_links">
        <div class="top_menu">
            <ul>
                <li class="normal-text"><a href="mailto:info@2apples.com.au"><img src="images/mail.png" width="15"> info@2apples.com.au</a> &nbsp;</li>
            </ul>
        </div>
    </div>

    <div class="menu">
        <ul class="normal-text">
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutUs.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="clients.html">Our Clients</a></li>
            <li><a href="contactUs.html">Contact Us</a></li>
        </ul>
    </div>
</div>
</div>


<div id="contents">
<div class="inner_page">
<h1><?=$thankYou ?></h1>
</div>


</div>


</div>
</div>
<div align="center">
    <div id="copyright" class="normal-text">
        &copy; TwoApples Pty Ltd. All Rights Reserved.
    </div>
</div>

</body>
</html>