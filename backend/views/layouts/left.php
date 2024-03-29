<?php
use dekrium\user\models\User;
if (!Yii::$app->user->isGuest) {
    

?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>ARRIAN RIZKI FIRDAUS</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'ARRIAN RIZKI FIRDAUS', 'options' => ['class' => 'header']],
                    //['label' => 'Gii', 'icon' => 'cloud-download', 'url' => ['/gii']],
                    //['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Home','icon' => 'home', 'url' => ['/site/index']],
        ['label' => 'Data Perusahaan','icon' => 'th',
                'items' => 
                [
        ['label' => 'Pelanggan', 'icon' => 'user-plus','url' => ['/pelanggan']],
        ['label' => 'Sopir','icon' => 'users', 'url' => ['/sopir']],
        ['label' => 'Kendaraan','icon' => 'bus', 'url' => ['/kendaraan']],
        ['label' => 'Jenis Kendaraan','icon' => 'table', 'url' => ['/jenis']],
        ['label' => 'Transaksi','icon' => 'exchange', 'url' => ['/transaksi']],
        ['label' => 'Tarif','icon' => 'money', 'url' => ['/tarif']],
                ]
            ],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    /*[
                        'label' => 'Same tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],*/
                ],
            ]
        ) ?>

    </section>

</aside>

<?php
    }
?>