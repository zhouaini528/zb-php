<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Zb\Api;

use Lin\Zb\Request;

class Account extends Request
{
    /**
     * GET https://trade.zb.live/api/addSubUser
     * */
    public function addSubUser(array $data=[]){
        if(!isset($data['method'])) $data['method']='addSubUser';
        $this->type='GET';
        $this->path='/api/addSubUser';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getSubUserList
     * */
    public function getSubUserList(array $data=[]){
        if(!isset($data['method'])) $data['method']='getSubUserList';
        $this->type='GET';
        $this->path='/api/getSubUserList';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *https://trade.zb.live/api/doTransferFunds
     * */
    public function doTransferFunds(array $data=[]){
        if(!isset($data['method'])) $data['method']='doTransferFunds';
        $this->type='GET';
        $this->path='/api/doTransferFunds';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *https://trade.zb.live/api/createSubUserKey
     * */
    public function createSubUserKey(array $data=[]){
        if(!isset($data['method'])) $data['method']='createSubUserKey';
        $this->type='GET';
        $this->path='/api/createSubUserKey';
        $this->data=$data;
        return $this->exec();
    }
}