<?php
namespace app\widgets;

use Yii;


class Test extends \yii\base\Widget
{
    public $qq;

    public function run()
    {
        return  $this->qq . 'qwreqwrqw';
    }
}
