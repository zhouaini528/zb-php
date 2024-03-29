### It is recommended that you read the official document first

ZB docs [https://www.zb.live/api](https://www.zb.live/api)

All interface methods are initialized the same as those provided by Zb. See details [src/api](https://github.com/zhouaini528/zb-php/tree/master/src/Api)

Most of the interface is now complete, and the user can continue to extend it based on my design, working with me to improve it.

[中文文档](https://github.com/zhouaini528/zb-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php) Support [Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) Support [Websocket](https://github.com/zhouaini528/okex-php/blob/master/README.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) Support [Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) Support [Websocket](https://github.com/zhouaini528/binance-php/blob/master/README.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/Mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/bitfinex-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php)

#### Installation
```
composer require linwj/zb
```

Support for more request Settings
```php
$zb=new Zb();

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

### Zb Spot API

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

[More Test](https://github.com/zhouaini528/zb-php/tree/master/tests)

[More Api](https://github.com/zhouaini528/zb-php/tree/master/src/Api)
