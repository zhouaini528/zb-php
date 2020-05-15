<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Zb;

use Lin\Zb\Api\Trade;
use Lin\Zb\Api\Event;
use Lin\Zb\Api\Account;
use Lin\Zb\Api\Margin;
use Lin\Zb\Api\Market;

class Zb
{
    protected $key;
    protected $secret;
    protected $host;
    
    protected $options=[];
    
    function __construct(string $key='',string $secret='',string $host='https://trade.zb.live'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }
    
    /**
     * 
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
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
    function trade(){
        return new Trade($this->init());
    }
    
    /**
     *
     * */
    function event(){
        return new Event($this->init());
    }
    
    /**
     *
     * */
    function margin(){
        return new Margin($this->init());
    }
    
    /**
     *
     * */
    function market(){
        return new Market($this->init());
    }
}