<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'CS-CART',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top navbar-cscart',
        ],
    ]);
    $menuItems = [
        ['label' => 'Addons', 'items' => [
            ['label' => 'Manage addons', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            ['label' => 'Access restrictions', 'url' => ['/crud-job/index']],
        ]],
        ['label' => 'Administration', 'items' => [
            ['label' => 'Stores', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            ['label' => 'Payment methods', 'url' => ['/crud-job/index']],
            ['label' => 'Shopping & taxes', 'url' => ['/crud-job-result/index']],
            ['label' => 'Stores & pickup points', 'url' => ['/crud-job/index']],
            ['label' => 'Statuses', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            ['label' => 'Profile fields', 'url' => ['/crud-job/index']],
            ['label' => 'Notifications', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            ['label' => 'Currencies', 'url' => ['/crud-job/index']],
            ['label' => 'Languages', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            ['label' => 'Logs', 'url' => ['/crud-job/index']],
            '<li class="divider">',
            ['label' => 'Files', 'url' => ['/crud-job-result/index']],
            ['label' => 'Backup/Restore', 'url' => ['/crud-job/index']],
            ['label' => 'Storages', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            [
                'label' => 'Import data',
                'url' => ['#'], 
                'template' => '<a href="{url}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
                'options' => [
                    'class' => 'dropdown',
                ],
                'items' => [
                    ['label' => 'Products', 'url' => ['/crud-job/index'], 'options' => ['class' => 'dropdown-item']],
                    ['label' => 'Features', 'url' => ['/crud-job/index']],
                    ['label' => 'Order statuses', 'url' => ['/crud-job/index']],
                    ['label' => 'Translations', 'url' => ['/crud-job/index']],
                    ['label' => 'Subscribers', 'url' => ['/crud-job/index']],
                    ['label' => 'Users', 'url' => ['/crud-job/index']],
                    ['label' => 'Pickup', 'url' => ['/crud-job/index']],
                    ['label' => 'Products (Deprecated)', 'url' => ['/crud-job/index']],
                ],
            ],
            ['label' => 'Export data', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            ['label' => 'File changes detector', 'url' => ['/crud-job/index']],
            ['label' => 'Upgrade center', 'url' => ['/crud-job/index']],
        ]],
        ['label' => 'Settings', 'items' => [
            ['label' => 'General', 'url' => ['/crud-job/index']],
            ['label' => 'Apperance', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            ['label' => 'Company', 'url' => ['/crud-job/index']],
            ['label' => 'Checkout', 'url' => ['/crud-job-result/index']],
            ['label' => 'E-mails', 'url' => ['/crud-job/index']],
            ['label' => 'Thumnails', 'url' => ['/crud-job-result/index']],
            ['label' => 'Sitemap', 'url' => ['/crud-job/index']],
            ['label' => 'Upgrade center', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            ['label' => 'Security settings', 'url' => ['/crud-job/index']],
            '<li class="divider">',
            ['label' => 'Logging', 'url' => ['/crud-job-result/index']],
            ['label' => 'Reports', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            ['label' => 'Settings wizard', 'url' => ['/crud-job-result/index']],
            ['label' => 'Licensing mode', 'url' => ['/crud-job-result/index']],
        ]],
        ['label' => 'Design', 'items' => [
            ['label' => 'Themes', 'url' => ['/crud-job-result/index']],
            ['label' => 'Layouts', 'url' => ['/crud-job/index']],
            ['label' => 'Templates', 'url' => ['/crud-job-result/index']],
            '<li class="divider">',
            ['label' => 'Menus', 'url' => ['/crud-job/index']],
            ['label' => 'Product tabs', 'url' => ['/crud-job-result/index']],            
        ]],
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right navbar-cscart-text'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <?php
    echo Menu::widget([
        'options' => [
            'id' => 'navid',
            'class' => 'navbar-nav',
            'style' => 'margin-top: 50px; margin-left: 20px; float: left; font-size: 16px;',
            'data' => 'menu',
        ],
        'items' => [
            [
            'label' => 'Orders', 
            'url' => ['#'], 
            'template' => '<a href="{url}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
            'items' => [
                ['label' => 'View orders', 'url' => ['orders/index']],
                ['label' => 'Shipments', 'url' => ['shipments/index']],
                ['label' => 'Sales reports', 'url' => ['salesreports/index']],
                // ['label' => 'Abandoned/Live carts', 'url' => ['site/cart_list']],
            ]],
            ['label' => 'Products', 'url' => ['site/products']],
            ['label' => 'Customers', 'url' => ['site/customers']],
            ['label' => 'Marketing', 'url' => ['site/marketing']],
            ['label' => 'Website', 'url' => ['site/website']],
        ],
        'labelTemplate' =>'{label} Label',
        'linkTemplate' => '<a href="{url}"><span>{label}</span></a>',
        'activeCssClass'=>'active',
        'firstItemCssClass'=>'fist',
        'lastItemCssClass' =>'last',
    ]);

    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

