<?php
/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\Products;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;

$this->title = '产品列表';
$this->params['breadcrumbs'][] = $this->title;

$model = new Products();
if(isset($search)){
    $query=$model->find()->where(['like','product_name',$search]);
}else{
    $query=$model->find();
}

$products = new \yii\data\ActiveDataProvider([
    'query' => $query,
    'pagination' => [
        'pageSize' => 10,
    ]
])

?>
<style>
    .model_reWidth{
        width: 80%;
    }
</style>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">产品搜索</h3>
    </div>
    <div class="panel-body">
        <?php $form=ActiveForm::begin([
            'layout' => 'inline',
            'method'=> 'get',
        ])?>

        <?=Html::input('text','search','',[
            'class'=>'form-control',
            'placeholder'=>'搜索内容',
        ])?>

        <?=Html::submitButton('搜索',[
            'class'=>'form-control',
        ])?>

        <?php ActiveForm::end()?>
    </div>
</div>

<section class="panel panel-default">
    <header class="panel-heading">
        列表展示
    </header>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $products,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'product_name',
                'contact',
                'begin_time' => [
                    'attribute' => 'begin_time',
                    'value' => function ($data) {
                        return date('Y-m-d', $data->begin_time);
                    }
                    //'format'=>['date','php:Y-m-d']  //两种显示日期形式
                ],
                'end_time' => [
                    'attribute' => 'end_time',
                    'format' => ['date', 'php:Y-m-d'],
                ],
                'created_at' => [
                    'attribute' => 'created_at',
                    'value' => function ($data) {
                        return date('Y-m-d H:i:s', $data->created_at);
                    }
                ],
                'updated_at' => [
                    'attribute' => 'updated_at',
                    'format' => ['date', 'php:Y-m-d H:i:s'],
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header'=>'操作',
                    'buttons' => [
                        'view' => function ($url,$model,$key) {
                            $options = [
                                'title' => Yii::t('yii', '查看'),
                                'class' => 'view',
                                'data-toggle' => 'modal',
                                'data-target' => '#view-modal',
                                'data-key'=>$key,
                            ];
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>','', $options);
                        },
                        'update' => function ($url) {
                            $options = [
                                'title' => Yii::t('yii', '编辑'),
                            ];
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, $options);
                        },
                        'delete' => function ($url,$model,$key) {
                            $options = [
                                'title' => Yii::t('yii', '删除'),
                                'class'=>'delete',
                                'data-key'=>$key,
                            ];
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', '', $options);
                        },
                    ]
                ],

            ],
        ]) ?>


        <?php
        Modal::begin([
            'id' => 'view-modal',
            'header' => '<h4 class="modal-title">详情</h4>',
            'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">关闭</a>',
            'size'=>'modal-lg model_reWidth',
        ]);
        $requestUrl = Url::toRoute('view');
        $js = <<<JS
        $('.view').on('click',function(){
            $.get('{$requestUrl}', {id:$(this).data('key')},
                function (data) {
                    $('.modal-body').html(data);
                });
        })
JS;
        $this->registerJs($js);
        Modal::end();
        ?>

        <?php
            $deleteUrl = Url::toRoute('delete');
            $deleteJS=<<<JS
            $(".delete").on("click",function(){
            var status=confirm("确定要删除此项吗？");
                if(!status){
                    return false;
                }else{
                    $.get('{$deleteUrl}',{id:$(this).data('key')},function(data){
                            console.log(data);
                    })
                }
            })
JS;
            $this->registerJs($deleteJS);
        ?>

    </div>
</section>




