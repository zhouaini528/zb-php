<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Zb\Api;

use Lin\Zb\Request;

class Configuration extends Request
{
    /**
     * GET http://api.zb.live/data/v1/markets
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->host='http://api.zb.live';
        $this->path='/data/v1/markets';
        $this->data=$data;
        return $this->exec();
    }
}