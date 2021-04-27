<?php
	/*
		date:2021/4/22
		author:wumin
	*/
	//获取网关$_GET参数


	//require_once("PostData.php");
	$Status=$_GET['Status'];
	$ReasonCode=$_GET['ReasonCode'];
	$OrderId=$_GET['OrderId'];
	$TransactionId=$_GET['TransactionId'];
	$CurrencyType=$_GET['CurrencyType'];
	$Amount=$_GET['Amount'];
	$SecretKey=$_GET['SecretKey'];
	//temp
	
	$dsn="mysql:host=127.0.0.1;port=3306;dbname=orderAgent;charset=utf8";
	$username="root";
	$password="root";
	$pdo=new PDO($dsn,$username,$password);

	//只判断交易成功的情况
	if($Status='Success'){
       $Signature = MD5($OrderId . $TransactionId . $Status . $CurrencyType . $Amount . $ReasonCode . $SecretKey);
	   //交易成功，写到orderAgent 数据库对应 字段status 为 1 ，失败0
	   $sql="update orderAgent set status=1 where id='{$OrderId}'"; //更新失败
	
       $re=$pdo->exec($sql);
	  
	   //根据orderid 查询orderAgent表中检索出returnurl 
	   $q = $pdo->query("SELECT ReturnUrl from orderAgent where orderid ='{$OrderId}'");//成功
       $rows = $q->fetch();
	   $Url = $rows['ReturnUrl'];

	   $param="?OrderId=". $OrderId . "&TransactionId=" . $TransactionId . "&Status=" . $Status . "&CurrencyType=" . $CurrencyType . "&Amount=" . $Amount  ."&ReasonCode=" . $ReasonCode ."&Signature=" . $Signature;
	
	
	   header("Location:".$Url . $param); 
	   exit;
	}
		
?>