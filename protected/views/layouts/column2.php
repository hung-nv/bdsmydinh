<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sidebar.css" />
<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <?php echo $content; ?>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="siderbar">
                    <div class="widget-hotline">
                        <span>0943 74 9209</span>
                    </div>
                    
                    <div class="widget-register margin-bottom-30">
                        <div class="widget-title">Nhận trọn bộ tài liệu</div>
                        <div class="widget-register-content">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Họ và tên" name="lastname" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email" name="lastname" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Số điện thoại" name="lastname" required="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="ĐĂNG KÝ ">
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="widget-img margin-bottom-30">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/300x250.gif" style="width:100%;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>