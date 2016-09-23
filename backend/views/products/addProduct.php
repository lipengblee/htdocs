<?php

use yii\helpers\Html;
use yii\helpers\Markdown;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\products */
/* @var $form ActiveForm */
$this->title = '产品管理';
$this->params['breadcrumbs'][] = $this->title;
?>

<link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker-custom.css"/>
<link rel="stylesheet" type="text/css" href="assets/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>

<div class="products-add_product">

    <section class="panel">

        <header class="panel-heading">添加产品</header>

        <div class="panel-body">

            <?php $form = ActiveForm::begin([
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "<div class=\"col-lg-1 text-right \">{label}</div>\n{beginWrapper}\n<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-lg-3\">{error}</div>\n{endWrapper}",
                    'labelOptions' => ['class' => 'control-label'],
                    'wrapperOptions' => ['class' => 'col-lg-11'],
                ]
            ]); ?>
            <!--产品名称-->
            <?= $form->field($model, 'product_name', [
                'wrapperOptions' => [
                    'class' => 'col-lg-10'
                ]
            ]) ?>
            <!--产品描述-->
            <?= $form->field($model, 'product_description')->textarea() ?>
            <!--联系方式-->
            <?= $form->field($model, 'contact', [
                'wrapperOptions' => [
                    'class' => 'col-lg-3',
                ]
            ]) ?>
            <!--开始时间-->
            <?= $form->field($model, 'begin_time', [
                'wrapperOptions' => [
                    'class' => 'col-lg-4',
                ]
            ])->textInput([
                'class' => 'form-control default-date-picker',
            ]) ?>
            <!--结束时间-->
            <?= $form->field($model, 'end_time', [
                'wrapperOptions' => [
                    'class' => 'col-lg-4',
                ]
            ])->textInput([
                'class' => 'form-control default-date-picker',
            ]) ?>
            <!--产品详情-->
            <?php //$form->field($model, 'product_detail')->textarea(['class' => 'ckeditor',]) ?>

            <br>
            <div class="form-group">
                <?= Html::submitButton('&nbsp;添&nbsp;加&nbsp;产&nbsp;品&nbsp;', ['class' => 'btn btn-primary col-lg-offset-4']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </section>
</div><!-- products-add_product -->
<!--添加编辑器-->
