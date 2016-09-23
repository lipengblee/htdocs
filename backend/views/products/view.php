<?php

use yii\widgets\DetailView;

?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'product_id',
        'product_name',
        'product_description',
        'contact',
        'thumbnail'=>[
            'attribute'=>'thumbnail',
            'value'=>$model->thumbnail?$model->thumbnail:null,
            'format'=>['image',['width'=>200]],
        ],
        'begin_time'=>[
            'attribute'=>'begin_time',
            'format'=>['date','php:Y-m-d']
        ],
        'end_time'=>[
            'attribute'=>'end_time',
            'format'=>['date','php:Y-m-d']
        ],
        'product_detail:html',
        'created_at'=>[
            'attribute'=>'created_at',
            'format'=>['date','php:Y-m-d H:i:s']
        ],
        'updated_at'=>[
            'attribute'=>'updated_at',
            'format'=>['date','php:Y-m-d H:i:s']
        ],
    ],
]) ?>
