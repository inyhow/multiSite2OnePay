<?php
/*
中间代理平台 接收订单数据 发送到支付网关
*/   

//revice other postdata
	$Email=$_POST['Email'];
	$CurrencyType=$_POST['CurrencyType'];
	$Amount=$_POST['Amount'];
	$ProductName1=$_POST['ProductName1'];
	$Quantity1=$_POST['Quantity1'];
	$paymerchantid=$_POST['paymerchantid'];
	$OrderId=$_POST['OrderId'];
	$Email=$_POST['Email'];
	$CurrencyType=$_POST['CurrencyType'];
	$Amount=$_POST['Amount'];
	$Signature=$_POST['Signature'];
	$Language=$_POST['Language'];
	$PayPageStyle=$_POST['PayPageStyle'];
	$Sku1=$_POST['Sku1'];
	$ProductName1=$_POST['ProductName1'];
	$Price1=$_POST['Price1'];
	$Quantity1=$_POST['Quantity1'];
	$ShippingFirstName=$_POST['ShippingFirstName'];
	$ShippingLastName=$_POST['ShippingLastName'];
	$ShippingAddress1=$_POST['ShippingAddress1'];
	$ShippingAddress2=$_POST['ShippingAddress2'];
	$ShippingCity=$_POST['ShippingCity'];
	$ShippingCountry=$_POST['ShippingCountry'];
	$ShippingState=$_POST['ShippingState'];
	$ShippingZipcode=$_POST['ShippingZipcode'];
	$ShippingTelephone=$_POST['ShippingTelephone'];
	$BillingFirstName=$_POST['BillingFirstName'];
	$BillingLastName=$_POST['BillingLastName'];
	$BillingAddress1=$_POST['BillingAddress1'];
	$BillingAddress2=$_POST['BillingAddress2'];
	$BillingCity=$_POST['BillingCity'];
	$BillingCountry=$_POST['BillingCountry'];
	$BillingState=$_POST['BillingState'];
	$BillingZipcode=$_POST['BillingZipcode'];
	$BillingTelephone=$_POST['BillingTelephone'];
//revice other postdata

	$ReturnUrl=$_POST['ReturnUrl'];
	$NotifyUrl=$_POST['NotifyUrl'];
	$addTime=date("Y-m-d h:i:s");

	$dsn="mysql:host=127.0.0.1;port=3306;dbname=orderAgent;charset=utf8";
	$username="root";
	$password="root";
	$pdo=new PDO($dsn,$username,$password);

	$sql="INSERT INTO `orderAgent` ( `paymerchantid`, `OrderId`, `Email`, `CurrencyType`, `Amount`, `Signature`, `ReturnUrl`, `NotifyUrl`, `Language`, `Sku1`, `ProductName1`, `Price1`, `Quantity1`, `ShippingFirstName`, `ShippingLastName`, `ShippingAddress1`, `ShippingAddress2`, `ShippingCity`, `ShippingCountry`, `ShippingState`, `ShippingZipcode`, `ShippingTelephone`, `BillingFirstName`, `BillingLastName`, `BillingAddress1`, `BillingAddress2`, `BillingCity`, `BillingCountry`, `BillingState`, `BillingZipcode`, `BillingTelephone`,`create_at`) VALUES ('{$paymerchantid}', '{$OrderId}', '{$Email}', '{$CurrencyType}', '{$Amount}', '{$Signature}', '{$ReturnUrl}', '{$NotifyUrl}', '{$Language}', '{$Sku1}', '{$ProductName1}', '{$Price1}', '{$Quantity1}', '{$ShippingFirstName}', '{$ShippingLastName}', '{$ShippingAddress1}', '{$ShippingAddress2}', '{$ShippingCity}', '{$ShippingCountry}', '{$ShippingState}', '{$ShippingZipcode}', '{$ShippingTelephone}', '{$BillingFirstName}', '{$BillingLastName}', '{$BillingAddress1}', '{$BillingAddress2}', '{$BillingCity}', '{$BillingCountry}', '{$BillingState}', '{$BillingZipcode}', '{$BillingTelephone}','{$addTime}')";


	$records=$pdo->exec($sql);
	if ($records){
	//post http://demogateway.alilinpaygobal.com/payment demo网关地址
	
	$AgentReUrl="http://".$_SERVER["HTTP_HOST"]. '/agentSource.php'; //中间站returnurl
	$AgentNoUrl="http://".$_SERVER["HTTP_HOST"]. '/agentSource.php'; //中间站notifyurl
	
/*	$postData= array(
		'PaymerchantID'=>$paymerchantid,
		'OrderId'=>$OrderId,
		'Email'=>$Email,
		'CurrencyType'=> $CurrencyType,
		'Amount'=>$Amount,
		'Signature'=> $Signature,
		'Language'=>$Language,
		'ReturnUrl'=>$AgentReUrl,
		'NotifyUrl'=>$AgentNoUrl,
		'Sku1'=>$Sku1,
		'ProductName1'=>$ProductName1,
		'Price1'=>$Price1,
		'Quantity1'=>$Quantity1,
		'ShippingFirstName'=>$ShippingFirstName,
		'ShippingLastName'=>$ShippingLastName,
		'ShippingAddress1'=>$ShippingAddress1,
		'ShippingCity'=>$ShippingCity,
		'ShippingCountry'=>$ShippingCountry,
		'ShippingState'=>$ShippingState,
		'ShippingZipcode'=>$ShippingZipcode,
		'ShippingTelephone'=>$ShippingTelephone,
		'BillingFirstName'=>$BillingFirstName,
		'BillingLastName'=>$BillingLastName,
		'BillingAddress1'=>$BillingAddress1,
		'BillingCity'=>$BillingCity,
		'BillingCountry'=>$BillingCountry,
		'BillingState'=>$BillingState,
		'BillingZipcode'=>$$BillingZipcode,
		'BillingTelephone'=>$BillingTelephone,
);
request_by_curl('http://demogateway.allinpayglobal.com/payment', $postData);
    $payhtm=request_by_curl('http://demogateway.allinpayglobal.com/payment', $postData);
	$payhtm=str_replace('"/payment/','"http://demogateway.allinpayglobal.com/payment/',$payhtm);
	$payhtm=str_replace('"/Scripts/','"http://demogateway.allinpayglobal.com/Scripts/',$payhtm);
	$payhtm=str_replace('"/Content/','"http://demogateway.allinpayglobal.com/Content/',$payhtm);	
    print(htmlspecialchars_decode($payhtm));
*/
	echo '<!DOCTYPE html><html><head><meta charset="UTF-8"><title></title></head><script type="text/javascript">setTimeout("document.form1.submit()",1);</script>';
	echo '<body name="form1" onload=document.getElementById("s1").submit(); >';
	echo '<form style="text-align:center;" action="http://demogateway.allinpayglobal.com/payment" method="post" id="s1" >';
	echo '<input type="hidden"  id="paymerchantid" name="paymerchantid" value="'.$paymerchantid.'" />';
	echo '<input type="hidden"  id="OrderId" name="OrderId" value="'.$OrderId.'" />';
	echo '<input type="hidden"  id="Email" name="Email" value="'.$Email.'" />';
	echo '<input type="hidden"  id="CurrencyType" name="CurrencyType" value="'.$CurrencyType.'" />';
	echo '<input type="hidden"  id="Amount" name="Amount" value="'.$Amount.'" />';
	echo '<input type="hidden"  id="Signature" name="Signature"  value="'.$Signature.'" />';
	echo '<input type="hidden"  id="ReturnUrl" name="ReturnUrl" value="'.$AgentReUrl.'" />';
	echo '<input type="hidden"  id="NotifyUrl" name="NotifyUrl" value="'.$AgentNoUrl.'" />';
	echo '<input type="hidden"  id="Language" name="Language" value="'.$Language.'" />';
	echo '<input type="hidden"  id="Sku1" name="Sku1" value="'.$Sku1.'" />';
	echo '<input type="hidden"  id="ProductName1" name="ProductName1" value="'.$ProductName1.'" />';
	echo '<input type="hidden"  id="Price1" name="Price1" value="'.$Price1.'" />';
	echo '<input type="hidden"  id="Quantity1" name="Quantity1" value="'.$Quantity1.'" />';
	echo '<input type="hidden"  id="ShippingFirstName" name="ShippingFirstName" value="'.$ShippingFirstName.'" />';
	echo '<input type="hidden"  id="ShippingLastName" name="ShippingLastName" value="'.$ShippingLastName.'" />';
	echo '<input type="hidden"  id="ShippingAddress1" name="ShippingAddress1" value="'.$ShippingAddress1.'" />';
	echo '<input type="hidden"  id="ShippingCity" name="ShippingCity" value="'.$ShippingCity.'" />';
	echo '<input type="hidden"  id="ShippingCountry" name="ShippingCountry" value="'.$ShippingCountry.'" />';
	echo '<input type="hidden"  id="ShippingState" name="ShippingState" value="'.$ShippingState.'" />';
	echo '<input type="hidden"  id="ShippingZipcode" name="ShippingZipcode" value="'.$ShippingZipcode.'" />';
	echo '<input type="hidden"  id="ShippingTelephone" name="ShippingTelephone" value="'.$ShippingTelephone.'" />';
	echo '<input type="hidden"  id="BillingFirstName" name="BillingFirstName" value="'.$BillingFirstName.'" />';
	echo '<input type="hidden"  id="BillingLastName" name="BillingLastName" value="'.$BillingLastName.'" />';
	echo '<input type="hidden"  id="BillingAddress1" name="BillingAddress1" value="'.$BillingAddress1.'" />';
	echo '<input type="hidden"  id="BillingCity" name="BillingCity" value="'.$BillingCity.'" />';
	echo '<input type="hidden"  id="BillingCountry" name="BillingCountry" value="'.$BillingCountry.'" />';
	echo '<input type="hidden"  id="BillingState" name="BillingState" value="'.$BillingState.'" />';
	echo '<input type="hidden"  id="BillingZipcode" name="BillingZipcode" value="'.$BillingZipcode.'" />';
	echo '<input type="hidden"  id="BillingTelephone" name="BillingTelephone" value="'.$BillingTelephone.'" /></form>';
	echo '<div style="width:600px;height:300px;margin:auto;font-size:24px;color:red;">';
	echo 'Processing request AllinPay,please Wait a moment.</div></body></html>';


}else{
	
	echo "error";exit();
	
}

