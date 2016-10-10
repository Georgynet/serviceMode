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
use yii\web\IdentityInterface;

class ServiceMode extends Component
{
    public $active = false;
    
    public $users = [];

    public function init()
    {
        if ($this->active) {
            if (!$this->isAllowedUser()) {
                Yii::$app->controllerMap['service'] = 'georgynet\serviceMode\ServiceController';
                Yii::$app->catchAll = ['service/index'];
            }
        }
    }
    
    protected function isAllowedUser()
    {
        if (!Yii::$app->user->identity instanceof IdentityInterface) {
            return false;
        }

        if (!is_array($this->users)) {
            return false;
        }

        if (in_array(Yii::$app->user->identity->username, $this->users)) {
            return true;
        }

        return false;
    }
}
