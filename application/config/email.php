<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['protocol'] = 'mail';
// $config['mail_path'] = 'mail.mysetup.com.ar';
 $config['smtp_host'] = 'mail.mysetup.com.ar';
// $config['smtp_host'] = 'ssl://mysetup.com.ar';
// $config['smtp_port'] = 2525;

//
//$config['protocol'] = 'sendmail';
//$config['mailpath'] = '/usr/sbin/sendmail';
//$config['dsn'] = true;


 $config['smtp_port'] = 465;
 $config['smtp_user'] = 'no-reply@mysetup.com.ar';
 $config['smtp_pass'] = 'kp)O3PVcic!=';
 $config['charset'] = "utf-8";
 $config['mailtype'] = "html";
	$config['smtp_crypto'] = 'tls';
//	$config['smtp_crypto'] = 'ssl';
 $config['newline'] = "\r\n";

