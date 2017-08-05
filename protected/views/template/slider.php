<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/test2.jpg">
        </div>
        <div class="item">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/test3.jpg">
        </div>
        <div class="item">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/test.jpg">
        </div>
        <div class="item">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/test4.jpg">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span data-u="arrowleft" class="arrow arrowleft" style="top: 40%; width: 40px; height: 58px; right: 0;" data-autocenter="2"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span data-u="arrowright" class="arrow arrowright" style="top: 40%; width: 40px; height: 58px;" data-autocenter="2"></span>
        <span class="sr-only">Next</span>
    </a>
</div>