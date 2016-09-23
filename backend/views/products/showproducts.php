<?php
/* @var $this yii\web\View */

use yii\grid\GridView;
use backend\models\Products;

$this->title='产品列表';
$this->params['breadcrumbs'][]=$this->title;


$model=new Products();
$products=new \yii\data\ActiveDataProvider([
    'query'=>$model->find()->orderBy('updated_at desc'),
    'pagination'=>[
        'pageSize'=>10,
    ]
])

?>

        <section class="panel">
            <header class="panel-heading">
                列表展示
            </header>
            <div class="panel-body">
                <?=GridView::widget([
                    'dataProvider'=>$products,
                    'columns'=>[
                        ['class'=>'yii\grid\SerialColumn'],
                        'product_name',
                        'contact',
                        'begin_time'=>[
                            'attribute'=>'begin_time',
                            'value'=>function($data){
                                return date('Y-m-d',$data->begin_time);
                            }
                        //'format'=>['date','php:Y-m-d']  //两种显示日期形式
                        ],
                        'end_time'=>[
                            'attribute'=>'end_time',
                            'format'=>['date','php:Y-m-d'],
                        ],
                        'created_at'=>[
                            'attribute'=>'created_at',
                            'format'=>['date','php:Y-m-d H:i:s']
                        ],
                        'updated_at'=>[
                            'attribute'=>'updated_at',
                            'format'=>['date','php:Y-m-d H:i:s'],
                        ],
                        ['class'=>'yii\grid\ActionColumn'],

                    ],
                ])?>
            </div>
        </section>




