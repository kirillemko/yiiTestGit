<?php

namespace app\controllers;


use app\components\EntityDB\EntityDB;
use app\models\Tasks;
use app\models\User;
use app\models\Users;
use yii\web\Controller;

class AuthController extends Controller
{

    public function actionLogin()
    {
        $user = Users::find()->andWhere(['id' => 1])->one();

        if ($user) {
            \Yii::$app->user->login($user);

        }
        exit();
    }


}
