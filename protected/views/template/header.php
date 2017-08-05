<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css">
<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 hidden-sm hidden-md hidden-lg">
                    <div class="iconmenu" id="iconmenu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu-down.gif" align="left" width="30px"></div>
                </div>
                <div class="col-xs-5 hidden-sm hidden-md hidden-lg">
                    <div class="logo-hotline">
                        <!--<i class="glyphicon glyphicon-earphone"></i>-->
                        0943 74 9209
                    </div>
                </div>
                <div class="col-sm-3 logo col-xs-5">
                    <a class="link-logo" href="#">
                        <img style="height: 85px;padding-top: 10px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-my-dinh-pearl.png">
                    </a>
                </div>
                <div class="col-sm-9 text-right hidden-xs">
                    <a href="<?php echo Yii::app()->homeUrl; ?>" target="_blank">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/728x90.jpg" alt="728X90" title="728X90">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($this->menu) && $this->menu): ?>
        <div class="main-menu hidden-xs">
            <div class="container">
                <div class="row">
                    <nav>
                        <ul>
                            <li><a href="<?php echo Yii::app()->homeUrl; ?>">Trang chủ</a></li>
                            <?php foreach ($this->menu as $a): ?>
                                <li <?php if (isset($a['child']) && $a['child']): ?> class="drop" <?php endif; ?>>
                                    <a href="<?php echo $a['url']; ?>"><?php echo $a['label']; ?></a>

                                    <?php if (isset($a['child']) && $a['child']): ?>
                                        <div class="dropdownContain">
                                            <div class="dropOut">
                                                <div class="triangle"></div>
                                                <ul>
                                                    <?php foreach ($a['child'] as $b): ?>
                                                        <li><a href="<?php echo $b['url']; ?>"><?php echo $b['label']; ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="navbar-default hidden-sm hidden-md hidden-lg" id="navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li <?php if ($this->isHomepage): ?> class="active" <?php endif; ?>><a class="mnhomepage" href="<?php echo Yii::app()->homeUrl; ?>">Trang chủ</a></li>
                <!-- TRANG CHU -->
                <?php if (isset($this->menu) && $this->menu): ?>
                    <?php foreach ($this->menu as $i): ?>
                        <?php if (isset($i['child']) && $i['child']): ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id=""><?php echo $i['label']; ?><span class="caret"></span></a>
                                <ul class="dropdown-menu ullist" aria-labelledby="">
                                    <?php foreach ($i['child'] as $sub): ?>
                                        <li><a href="<?php echo $sub['url']; ?>"><?php echo $sub['label']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo $i['url']; ?>"><?php echo $i['label']; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="clearfix"></div>
</div>

<?php $this->renderPartial('../template/slider'); ?>