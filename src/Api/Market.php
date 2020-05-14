<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Zb\Api;

use Lin\Zb\Request;

class Market extends Request
{
    /**
     * GET http://api.zb.live/data/v1/allTicker
     * */
    public function getAllTicker(array $data=[]){
        $this->type='GET';
        $this->host='http://api.zb.live';
        $this->path='/data/v1/allTicker';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET http://api.zb.live/data/v1/ticker?market=btc_usdt
     * */
    public function getTicker(array $data=[]){
        $this->type='GET';
        $this->host='http://api.zb.live';
        $this->path='/data/v1/ticker';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET http://api.zb.live/data/v1/depth?market=btc_usdt&size=3
     * */
    public function getDepth(array $data=[]){
        $this->type='GET';
        $this->host='http://api.zb.live';
        $this->path='/data/v1/depth';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET http://api.zb.live/data/v1/trades?market=btc_usdt
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->host='http://api.zb.live';
        $this->path='/data/v1/trades';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET http://api.zb.live/data/v1/kline?market=btc_usdt
     * */
    public function getKline(array $data=[]){
        $this->type='GET';
        $this->host='http://api.zb.live';
        $this->path='/data/v1/kline';
        $this->data=$data;
        return $this->exec();
    }
}