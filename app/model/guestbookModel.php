<?php
namespace app\model;

use core\lib\model;

class guestbookModel extends model
{

    public $table = "guestBook";

    public function all()
    {
        $ret = $this->select($this->table,"*");
        return $ret;
    }

    public function addOne($data)
    {
        return $this->insert($this->table,$data);
    }
}