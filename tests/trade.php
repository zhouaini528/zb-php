<?php

/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Zb\Zb;

require __DIR__ .'../../vendor/autoload.php';

include 'key_secret.php';

$zb=new Zb($key,$secret);

//You can set special needs
$zb->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
    
    //If you are developing locally and need an agent, you can set this
    //'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);

/* 
method	String	Direct Assignmentorder
accesskey	String	accesskey
amount	float	Transaction Amount
currency	String	Transaction Coin/Pricing Coin
price	float	unit price
tradeType	int	Trade Types 1/0[buy/sell]
sign	String	Request Encrypted Signature String
reqTime	long	Current time in milliseconds
acctType	int	Margin 1/0[Margin /Spot]（Optional,Default to: 0 Spot）
customerOrderId	String	Custom ID
 */
//****************************LIMIT
try {
    $result=$zb->trade()->order([
        //'customerOrderId'=>'',
        'tradeType'=>'0',//1=buy,0=sell
        'currency'=>'btc-usdt',
        'price'=>'11000',
        'amount'=>'0.01',
        'method'=>'order',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


?>