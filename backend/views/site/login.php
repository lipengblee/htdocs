<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'Free Show Login';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <title><?=Html::encode($this->title)?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="/favicon.ico" />
    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/vendor/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">

    <link href="assets/css/minimal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-1">
<?php $this->beginBody()?>


<!-- Wrap all page content here -->
<div id="wrap">
    <!-- Make page fluid -->
    <div class="row">
        <!-- Page content -->
        <div id="content" class="col-md-12 full-page login">


            <div class="inside-block">
                <img src="assets/images/logo-big.png" alt class="logo">
                <h1><strong>Welcome</strong> Free Show</h1>
                <h5></h5>


                <?php $form = ActiveForm::begin([
                    'layout' => 'horizontal',
                    'id' => 'login-form',

                    'fieldConfig'=>[
                        'horizontalCssClasses' => [
                            'label' => 'sr-only',
                            'wrapper' => 'col-sm-12',
                            'error' => 'col-sm-12 text-left',
                        ],
                    ]
                ]); ?>


                    <section>
                        <div class="input-group col-sm-12">
                            <?= $form->field($model, 'username')->textInput([
                                'autofocus' => true,
                                'placeholder'=>'用户名',
                            ]) ?>
<!--                            <span class="input-group-addon"><i class="fa fa-user"></i></span>-->
                        </div>
                        <div class="input-group col-sm-12">
                            <?= $form->field($model, 'password')->passwordInput([
                                'placeholder'=>'密码'
                            ]) ?>
<!--                            <span class="input-group-addon"><i class="fa fa-key"></i></span>-->
                        </div>
                        <div class="input-group col-sm-12">
                            <?= $form->field($model,'verifyCode')->widget(Captcha::className(),[
                                'template'=>'<div class="row"><div class="col-sm-3">{image}</div><div class="col-sm-6">{input}</div></div>',
                                'imageOptions'=>['alt'=>'点击换图','title'=>'点击换图', 'style'=>'cursor:pointer'],
                            ])?>
                        </div>

                    </section>



                    <div class="form-group">
                        <?= Html::submitButton('登&nbsp;&nbsp;录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>



                <?php ActiveForm::end(); ?>

            </div>

        </div>
        <!-- /Page content -->
    </div>
</div>
<!-- Wrap all page content end -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
