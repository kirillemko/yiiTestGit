<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
\app\assets\MainAsset::register($this);
?>
<div class="users-index">


    <p>
        <?= Html::a('Создать нового юзера', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'label' => 'FIO',
                'value' => function(\app\models\Users $model){
                    return $model->login . ' ' . $model->pass;
                }
            ],
            'name',
            'role',
            [
                'class' => 'yii\grid\ActionColumn',
            ],
        ],
    ]); ?>


    <?=$dasffsd?>
    {{% dasffsd }}
</div>
