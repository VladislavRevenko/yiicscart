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

    <div class="btn-group">
        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Orders
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">
                    <span>View orders</span>
                    <span class="hint">View, process and print invoices slips for orders placed from your web site.</span>
                </a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">
                    <span>Shipments</span>
                    <span class="hint">View and print packing slips for shipments created from orders.</span>
                </a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">
                    <span>Sales reports</span>
                    <span class="hint">Detailed statistics on the sales.</span>
                </a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">
                    <span>Abandoned/Live carts</span>
                    <span class="hint">Lists of products that have not been purchased for some reason.</span>
                </a></li>
            </ul>
        </div>
        
        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#">
                    <span>Categories</span>
                    <span class="hint">View product categories which are used to group products in your store.</span>
                </a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-submenu"><a href="#">
                    <span>Products</span>
                    <span class="hint">View, add and edit products that are shown to visitors of your store.</span>
                </a>
                <ul class="dropdown-menu">
                    <li class=""><a href="#">Products on moderation</a></li>
                    <li role="separator" class="divider"></li>
                    <li class=""><a href="#">Disapproved products</a></li>
                </ul>
                </li>
                <li role="separator" class="divider"></li>
                <li><a href="#">
                    <span>Features</span>
                    <span class="hint">Add and manage extra product fields.</span>
                </a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">
                    <span>Filters</span>
                    <span class="hint">Product filters are displayed on the storefront and enable your customers to quickly find the products.</span>
                </a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">
                    <span>Options</span>
                    <span class="hint">Manage global product options and option variants in your store.</span>
                </a></li>
            </ul>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Customers
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#">
                    <span>Administrators</span>
                    <span class="hint">List of store administrators, registered users with an administrator account.</span>
                </a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">
                    <span>Customers</span>
                    <span class="hint">List of store customers, registered users with a customer account.</span>
                </a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">
                    <span>User groups</span>
                    <span class="hint">List of user groups that exist in your store.</span>
                </a></li>
            </ul>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Marketing
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#">
                    <span>Promotions</span>
                    <span class="hint">Promote goods and offer bonuses basing on customers memberships.</span>
                </a></li>
            </ul>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Website
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#">
                    <span>Pages</span>
                    <span class="hint">Create and publish pages, polls, forms and links.</span>
                </a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">
                    <span>SEO</span>
                    <span class="hint">SEO settings of your store.</span>
                </a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">
                    <span>Sitemap</span>
                    <span class="hint">Create additional sections of the customer area sitemap and define the set of links for them.</span>
                </a></li>
            </ul>
        </div>
    </div>

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

