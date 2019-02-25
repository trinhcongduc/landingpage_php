<?php
// Config Global
$base_url = "http://localhost/simple-landingpage";
// Config Seo
$title = "Title here";
$description = "Description";
$keywords = "Keyword";
$author = "Author";

// Config database
$hostname="localhost";
$userhost = "root";
$passhost = "";
$dbname = "vemba";
$tablename  = "contacts";


// Config email

$email_config = new stdClass();

$email_config->mail_title = "Title Mail";
$email_config->host = "smtp.gmail.com";
$email_config->port = 587;
$email_config->email_send = "vembaeduvn@gmail.com";
$email_config->pass_send = "fjvkktizsaphnmri";   //  google app password

// recipient
$email_config->email_receive = "vembaeduvn@gmail.com";


$email_config->sender_name = "Vemba";   //  google app password




