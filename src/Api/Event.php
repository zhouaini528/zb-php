<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Zb\Api;

use Lin\Zb\Request;

class Event extends Request
{
    /**
     * GET https://trade.zb.live/api/getAsset
     * */
    public function getAsset(array $data=[]){
        if(!isset($data['method'])) $data['method']='getAsset';
        $this->type='GET';
        $this->path='/api/getAsset';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/transferInActArea
     * */
    public function getTransferInActArea(array $data=[]){
        if(!isset($data['method'])) $data['method']='transferInActArea';
        $this->type='GET';
        $this->path='/api/transferInActArea';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/transferOutActArea
     * */
    public function getTransferOutActArea(array $data=[]){
        if(!isset($data['method'])) $data['method']='transferOutActArea';
        $this->type='GET';
        $this->path='/api/transferOutActArea';
        $this->data=$data;
        return $this->exec();
    }
}