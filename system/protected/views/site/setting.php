<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
<section class="content-header">
    <h1>
        Setting
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:void()"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('site/setting'); ?>">Setting</a></li>
        <li class="active">All</li>
    </ol>
</section>

<!-- Main content -->
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#homepage" data-toggle="tab">Homepage</a></li>
        <li class=""><a href="#features" data-toggle="tab">Features</a></li>
        <li class=""><a href="#why_me" data-toggle="tab">Why me? + Promotion</a></li>
        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="homepage">
            <?php $this->renderPartial('homepage', array('model' => $model)); ?>
            
        </div><!-- /.tab-pane -->
        <div class="tab-pane" id="features">
            <?php $this->renderPartial('features', array('features' => $features, 'dataF' => $dataF)); ?>
        </div><!-- /.tab-pane -->
        <div class="tab-pane" id="why_me">
            <?php $this->renderPartial('whyme', array('model' => $model)); ?>
        </div>
    </div><!-- /.tab-content -->
</div>