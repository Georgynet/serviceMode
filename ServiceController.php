<?php
/**
 * Created by PhpStorm.
 * User: Georg
 * Date: 09.10.2016
 * Time: 12:03
 */

namespace geogrynet\serviceMode;

use yii\web\Controller;

class ServiceController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('//service/index');
    }
}
