<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['protocol'] = 'smtp';
// $config['mail_path'] = 'mail.mysetup.com.ar';
 $config['smtp_host'] = 'mail.mysetup.com.ar';
// $config['smtp_host'] = 'ssl://smtp.mysetup.com.ar';
// $config['smtp_port'] = 2525;
 $config['smtp_port'] = 465;
 $config['smtp_user'] = 'no-reply@mysetup.com.ar';
 $config['smtp_pass'] = 'Dv6~=VRX=6y=[ohN^@';
 $config['charset'] = "utf-8";
 $config['mailtype'] = "html";
	$config['smtp_crypto'] = 'tls';
//	$config['smtp_crypto'] = 'ssl';
 $config['newline'] = "\r\n";