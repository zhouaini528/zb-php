<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Zb\Api;

use Lin\Zb\Request;

class Trade extends Request
{
    /**
     * GET https://trade.zb.live/api/order
     * */
    public function order(array $data=[]){
        $this->type='GET';
        $this->path='/api/order';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/orderMoreV2
     * */
    public function orderMoreV2(array $data=[]){
        $this->type='GET';
        $this->path='/api/orderMoreV2';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/cancelOrder
     * */
    public function cancelOrder(array $data=[]){
        $this->type='GET';
        $this->path='/api/cancelOrder';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getOrder
     * */
    public function getOrder(array $data=[]){
        $this->type='GET';
        $this->path='/api/getOrder';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getOrders
     * */
    public function getOrders(array $data=[]){
        $this->type='GET';
        $this->path='/api/getOrders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *https://trade.zb.live/api/getOrdersIgnoreTradeType
     * */
    public function getOrdersIgnoreTradeType(array $data=[]){
        $this->type='GET';
        $this->path='/api/getOrdersIgnoreTradeType';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getUnfinishedOrdersIgnoreTradeType
     * */
    public function getUnfinishedOrdersIgnoreTradeType(array $data=[]){
        $this->type='GET';
        $this->path='/api/getUnfinishedOrdersIgnoreTradeType';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getAccountInfo
     * */
    public function getAccountInfo(array $data=[]){
        $this->type='GET';
        $this->path='api/getAccountInfo';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getUserAddress
     * */
    public function getUserAddress(array $data=[]){
        $this->type='GET';
        $this->path='/api/getUserAddress';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getPayinAddress
     * */
    public function getPayinAddress(array $data=[]){
        $this->type='GET';
        $this->path='/api/getPayinAddress';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getWithdrawAddress
     * */
    public function getWithdrawAddress(array $data=[]){
        $this->type='GET';
        $this->path='/api/getWithdrawAddress';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getWithdrawRecord
     * */
    public function getWithdrawRecord(array $data=[]){
        $this->type='GET';
        $this->path='/api/getWithdrawRecord';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getChargeRecord
     * */
    public function getChargeRecord(array $data=[]){
        $this->type='GET';
        $this->path='/api/getChargeRecord';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/withdraw
     * */
    public function withdraw(array $data=[]){
        $this->type='GET';
        $this->path='/api/withdraw';
        $this->data=$data;
        return $this->exec();
    }
}