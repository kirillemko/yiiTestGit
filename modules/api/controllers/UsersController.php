<?php

namespace app\modules\api\controllers;

use app\models\Users;
use app\modules\api\controllers\base\Controller;
use yii\base\InvalidArgumentException;

/**
 * Default controller for the `api` module
 */
class UsersController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionGetById()
    {

        $user = Users::findOne(1)->toJSON();

        return $user;
    }
}
