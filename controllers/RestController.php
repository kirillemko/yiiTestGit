<?php

namespace app\controllers;


use app\models\Tasks;
use app\models\Users;
use yii\i18n\Formatter;
use yii\rest\ActiveController;
use yii\web\Response;

class RestController extends ActiveController
{
    public $modelClass = Users::class;

    public function beforeAction($action)
    {
        //\Yii::$app->response->format = Response::FORMAT_JSON;
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

RBAC

role based access control
}
