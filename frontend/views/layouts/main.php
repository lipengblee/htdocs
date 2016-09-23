<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
<!--    <script src="js/simpleCart.min.js"></script>-->
<!--    <script src="js/jquery.min.js"></script>-->
<!--    <script src="js/jquery.easydropdown.js"></script>-->
<!--    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>-->
<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            $('.popup-with-zoom-anim').magnificPopup({-->
<!--                type: 'inline',-->
<!--                fixedContentPos: false,-->
<!--                fixedBgPos: true,-->
<!--                overflowY: 'auto',-->
<!--                closeBtnInside: true,-->
<!--                preloader: false,-->
<!--                midClick: true,-->
<!--                removalDelay: 300,-->
<!--                mainClass: 'my-mfp-zoom-in'-->
<!--            });-->
<!--        });-->
<!--    </script>-->
</head>
<body>
<?php $this->beginBody() ?>


<!--header-->
<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="<?= Yii::$app->homeUrl ?>"><img src="images/logo.png" alt=""/></a>
            </div>
            <?php
            NavBar::begin([
                'options' => [
                    'class' => 'navbar navbar-left',
                ],
            ]);
            $menuItems = [
                ['label' => '首页', 'url' => ['/site/index']],
                ['label' => '栏目1', 'url' => ['/site/about']],
                ['label' => '栏目2', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link']
                    )
                    . Html::endForm()
                    . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>
            <div class="clearfix"></div>
        </div>
        <div class="banner_wrap">
            <div class="bannertop_box">
                <div class="welcome_box">
                    <h2>Welcome to windsur</h2>

                    <p>It is a long established fact that a reader will be distracted by the readable content of a
                        page</p>
                </div>
            </div>
            <div class="banner_right">
                <h1>Your kind of<br>Classes</h1>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's.</p>
            </div>
            <div class='clearfix'></div>
        </div>
    </div>
</div>
<!--END header-->

<!--  main  -->
<div class="main">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>
<!-- END main  -->

<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-grid">
            <h3>Category</h3>
            <ul class="list1">
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Eshop</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">New Collections</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-grid">
            <h3>Our Account</h3>
            <ul class="list1">
                <li><a href="#">Your Account</a></li>
                <li><a href="#">Personal information</a></li>
                <li><a href="#">Addresses</a></li>
                <li><a href="#">Discount</a></li>
                <li><a href="#">Orders history</a></li>
                <li><a href="#">Addresses</a></li>
                <li><a href="#">Search Terms</a></li>
            </ul>
        </div>
        <div class="footer-grid">
            <h3>Our Support</h3>
            <ul class="list1">
                <li><a href="#">Site Map</a></li>
                <li><a href="#">Search Terms</a></li>
                <li><a href="#">Advanced Search</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Addresses</a></li>
            </ul>
        </div>
        <div class="footer-grid">
            <h3>Newsletter</h3>

            <p class="footer_desc">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                consequat</p>

            <div class="search_footer">
                <input type="text" class="text" value="Insert Email" onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = 'Insert Email';}">
                <input type="submit" value="Submit">
            </div>
            <img src="images/payment.png" class="img-responsive" alt=""/>
        </div>
        <div class="footer-grid footer-grid_last">
            <h3>About Us</h3>

            <p class="footer_desc">Diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                wisi enim ad minim veniam,.</p>

            <p class="f_text">Phone: &nbsp;&nbsp;&nbsp;00-250-2131</p>

            <p class="email">Email: &nbsp;&nbsp;&nbsp;<a href="malito:mail@demolink.org">info(at)Shape.com</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer_bottom">
    <div class="container">
        <div class="copy">
            <p>Copyright &copy; 2015.Company name All rights reserved.More Templates </p>
        </div>
    </div>
</div>
<!--END footer-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
