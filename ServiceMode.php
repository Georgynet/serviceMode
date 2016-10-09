<?php
/**
 * Created by PhpStorm.
 * User: Georg
 * Date: 09.10.2016
 * Time: 11:10
 */

namespace georgynet\serviceMode;

use Yii;
use yii\base\Component;

class ServiceMode extends Component
{
    public $serviceMode = false;

    public function init()
    {
        if ($this->serviceMode) {
            Yii::$app->controllerMap['service'] = 'georgynet\serviceMode\ServiceController';
            Yii::$app->catchAll = ['service/index'];
        }
    }
}
