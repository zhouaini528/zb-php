### 建议您先阅读官方文档

ZB 文档地址 [https://www.zb.com/api](https://www.zb.com/api)

所有接口方法的初始化都与ZB提供的方法相同。更多细节 [src/api](https://github.com/zhouaini528/zb-php/tree/master/src/Api)

大部分的接口已经完成，使用者可以根据我的设计方案继续扩展，欢迎与我一起迭代它。

[English Document](https://github.com/zhouaini528/zb-php/blob/master/README.md)

QQ交流群：668421169

### 其他交易所API

[Exchanges](https://github.com/zhouaini528/exchanges-php) 它包含以下所有交易所，强烈推荐使用该SDK。

[Bitmex](https://github.com/zhouaini528/bitmex-php) 支持[Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README_CN.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) 支持[Websocket](https://github.com/zhouaini528/okex-php/blob/master/README_CN.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) 支持[Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README_CN.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) 支持[Websocket](https://github.com/zhouaini528/binance-php/blob/master/README_CN.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php) 

#### 安装方式
```
composer require linwj/zb
```

支持更多的请求设置
```php
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
```

### 现货交易 API

Market related API [More](https://github.com/zhouaini528/zb-php/blob/master/tests/market.php)
```php
$zb=new Zb($key,$secret);

try {
    $result=$zb->market()->getAllTicker();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$zb->market()->getTicker([
        'market'=>'btc_usdt'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$zb->market()->getDepth([
        'market'=>'btc_usdt',
        'size'=>'5'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$zb->market()->getTrades([
        'market'=>'btc_usdt',
        'since'=>'xxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$zb->market()->getKline([
        'market'=>'btc_usdt',
        //'type'=>'1day',
        'size'=>10
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

```

Order related API [More](https://github.com/zhouaini528/zb-php/blob/master/tests/trade.php)
```php
$zb=new Zb($key,$secret);

try {
    $result=$zb->trade()->order([
        //'customerOrderId'=>'',
        'tradeType'=>'0',//1=buy,0=sell
        'currency'=>'btc_usdt',
        'price'=>'11000',
        'amount'=>'0.01',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $order=$zb->trade()->getOrder([
        //'customerOrderId'=>'',
        'id'=>$result['id'],
        'currency'=>'btc_usdt',
    ]);
    print_r($order);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$zb->trade()->cancelOrder([
        //'customerOrderId'=>'',
        'id'=>$result['id'],
        'currency'=>'btc_usdt',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

Accounts related API [More](https://github.com/zhouaini528/zb-php/blob/master/tests/account.php)
```php
$zb=new Zb($key,$secret);

try {
    $result=$zb->account()->getSubUserList();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

```

[更多用例](https://github.com/zhouaini528/zb-php/tree/master/tests)

[更多API](https://github.com/zhouaini528/zb-php/tree/master/src/Api)
