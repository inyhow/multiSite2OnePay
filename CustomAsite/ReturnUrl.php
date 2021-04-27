<?php
/**
  Date:2021/4/23
  Author:wuming
 **/
 
$OrderId=$_GET['OrderId'];
$TransactionId=$_GET['TransactionId'];
$Status=$_GET['Status'];
$CurrencyType=$_GET['CurrencyType'];
$Amount=$_GET['Amount'];
$ReasonCode=$_GET['ReasonCode'];
$Signature=$_GET['Signature'];

//写入到数据库 订单表中，更新支付状态字段

$dsn="mysql:host=127.0.0.1;port=3306;dbname=source;charset=utf8";
$username="root";
$password="root";
$pdo=new PDO($dsn,$username,$password);
$sql="INSERT INTO `pay_order` ( `PaymerchantID`, `OrderId`, `Email`, `CurrencyType`, `Amount`, `ProductName1`, `Quantity1`,`addTime`) VALUES ( '{$PaymerchantID}', '{$OrderId}', '{$Email}', '{$CurrencyType}', '{$Amount}', '{$ProductName1}', '{$Quantity1}','{$addTime}')";
$records=$pdo->exec($sql);
echo "成功插入了{$records}条记录"  ;
