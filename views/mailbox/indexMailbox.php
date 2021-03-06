<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var istt\sms\models\MailboxSearch $searchModel
 */

$this->title = Yii::t('sms', 'Mailboxes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mailbox-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_searchMailbox', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('sms', 'Create {modelClass}', [
  'modelClass' => 'Mailbox',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hostname',
            'email:email',
            'password',
            ['attribute' => 'option', 'value' => function($data) { return implode('/', $data->option); }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
