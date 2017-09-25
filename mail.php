<?php
// via stackoverflow http://d.pr/QrzI
// first extend PHPMailer and set the defaults for your site
require("class.phpmailer.php");
class my_phpmailer extends phpmailer {
    // Set default variables for all new objects
    var $From     = "ict.aveate@gmail.com";
    var $FromName = "AVEATE HRIS SYSTEM";
    var $Host     = "smtp.gmail.com";
    var $Mailer   = "smtp";                         // Alternative to IsSMTP()
    var $WordWrap = 75;
    // Replace the default error_handler
    function error_handler($msg) {
        print("My Site Error");
        print("Description:");
        printf("%s", $msg);
        exit;
    }
}
?>
