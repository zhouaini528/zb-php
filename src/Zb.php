<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Zb;

use Lin\Zb\Api\Trade;
use Lin\Zb\Api\Event;

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
    function trade(){
        return new Trade($this->init());
    }
    
    /**
     *
     * */
    function event(){
        return new Event($this->init());
    }
}