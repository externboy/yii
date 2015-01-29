<?php

require (__DIR__ . '/vendor/swiftmailer/swiftmailer/lib/swift_required.php');

$tran = Swift_SmtpTransport::newInstance('smtp.126.com',25);
$tran->setUsername("externboy@126.com");
$tran->setPassword("noneeveryiwgprh");


$mailer = Swift_Mailer::newInstance($tran);

$message = Swift_Message::newInstance();
$message->setSubject("这个是标题")->setFrom(["externboy@126.com"=>'externboy'])
	->setTo(['andfo@163.com'=>'andfo'])
	->setBody("这个是内空你一定要收");


if($mailer->send($message)){
	die('发送成功');
}else{
	die('发送失败');
}