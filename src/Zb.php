<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Zb;


use Lin\Zb\Api\Account;
use Lin\Zb\Api\Order;
use Lin\Zb\Api\Zb as ZbAccounts;
use Lin\Zb\Api\Conversion;
use Lin\Zb\Api\Deposits;
use Lin\Zb\Api\Fees;
use Lin\Zb\Api\Fills;
use Lin\Zb\Api\Oracle;
use Lin\Zb\Api\Payment;
use Lin\Zb\Api\Product;
use Lin\Zb\Api\Profiles;
use Lin\Zb\Api\Reports;
use Lin\Zb\Api\System;
use Lin\Zb\Api\User;
use Lin\Zb\Api\Withdrawals;

class Zb
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;
    
    protected $options=[];
    
    function __construct(string $key='',string $secret='',string $passphrase='',string $host='https://api.pro.Zb.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
        $this->passphrase=$passphrase;
    }
    
    /**
     * 
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'passphrase'=>$this->passphrase,
            'host'=>$this->host,
            'options'=>$this->options,
        ];
    }
    
    /**
     * 
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }
    
    /**
     * 
     * */
    function account(){
        return new Account($this->init());
    }
    
    /**
     *
     * */
    function oracle(){
        return new Oracle($this->init());
    }
}