<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['protocol'] = 'smtp';
// $config['mail_path'] = 'mail.mysetup.com.ar';
 $config['smtp_host'] = 'mail.mysetup.com.ar';
// $config['smtp_port'] = 465;
 $config['smtp_port'] = 995;
 $config['smtp_user'] = 'no-reply@mysetup.com.ar';
 $config['smtp_pass'] = 'JTQ;yP0$0FC%';
 $config['charset'] = "utf-8";
 $config['mailtype'] = "html";
	$config['smtp_crypto'] = 'ssl';
//	$config['smtp_crypto'] = 'ssl';
 $config['newline'] = "\r\n";