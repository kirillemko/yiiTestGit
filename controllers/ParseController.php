<?php

namespace app\controllers;

use app\components\EntityDB\EntityDB;
use darkdrim\simplehtmldom\SimpleHTMLDom;
use Yii;
use app\models\Users;
use app\models\search\UsersSearch;
use app\controllers\base\SecuredController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class ParseController extends Controller
{


    public function actionParse()
    {

        if( Yii::$app->user->can('parse') ){

        }

        Yii::$app->mailer->compose(
            [
                'html' => 'register_html',
                'text' => 'register_text'
            ],
            [
                'q' => 'asdfasd'
            ]
        )
            ->setFrom('qwerasdfxcv213gfs@mail.ru')
            ->setTo('kirill.emko@mail.ru') // кому отправляем - реальный адрес куда придёт письмо формата asdf @asdf.com
            ->setSubject('Новая заявка на сайте Спецназ') // тема письма
            ->send();
    }
}
