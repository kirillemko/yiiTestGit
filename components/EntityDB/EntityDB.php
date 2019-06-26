<?php

namespace app\components\EntityDB;



use yii\base\Component;

class EntityDB extends Component {

    public $host;
    public $login;
    public $pass;

    public function setConf($host, $login, $pass)
    {
        $this->host = $host;
    }

    public function connect()
    {

    }
}