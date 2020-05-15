<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Zb\Api;

use Lin\Zb\Request;

class Margin extends Request
{
    /**
     * GET https://trade.zb.live/api/getLeverAssetsInfo
     * */
    public function getLeverAssetsInfo(array $data=[]){
        if(!isset($data['method'])) $data['method']='getLeverAssetsInfo';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getLeverBills
     * */
    public function getLeverBills(array $data=[]){
        if(!isset($data['method'])) $data['method']='getLeverBills';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/transferInLever
     * */
    public function transferInLever(array $data=[]){
        if(!isset($data['method'])) $data['method']='transferInLever';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/transferOutLever
     * */
    public function transferOutLever(array $data=[]){
        if(!isset($data['method'])) $data['method']='transferOutLever';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    
    /**
     *GET https://trade.zb.live/api/loan
     * */
    public function loan(array $data=[]){
        if(!isset($data['method'])) $data['method']='loan';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/cancelLoan
     * */
    public function cancelLoan(array $data=[]){
        if(!isset($data['method'])) $data['method']='cancelLoan';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getLoans
     * */
    public function getLoans(array $data=[]){
        if(!isset($data['method'])) $data['method']='getLoans';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getLoanRecords
     * */
    public function getLoanRecords(array $data=[]){
        if(!isset($data['method'])) $data['method']='getLoanRecords';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/borrow
     * */
    public function borrow(array $data=[]){
        if(!isset($data['method'])) $data['method']='borrow';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/autoBorrow
     * */
    public function autoBorrow(array $data=[]){
        if(!isset($data['method'])) $data['method']='autoBorrow';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/repay
     * */
    public function repay(array $data=[]){
        if(!isset($data['method'])) $data['method']='repay';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/doAllRepay
     * */
    public function doAllRepay(array $data=[]){
        if(!isset($data['method'])) $data['method']='doAllRepay';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getRepayments
     * */
    public function getRepayments(array $data=[]){
        if(!isset($data['method'])) $data['method']='getRepayments';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/getFinanceRecords
     * */
    public function getFinanceRecords(array $data=[]){
        if(!isset($data['method'])) $data['method']='getFinanceRecords';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/changeInvestMark
     * */
    public function changeInvestMark(array $data=[]){
        if(!isset($data['method'])) $data['method']='changeInvestMark';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://trade.zb.live/api/changeLoop
     * */
    public function changeLoop(array $data=[]){
        if(!isset($data['method'])) $data['method']='changeLoop';
        $this->type='GET';
        $this->path='/api/'.$data['method'];
        $this->data=$data;
        return $this->exec();
    }
}