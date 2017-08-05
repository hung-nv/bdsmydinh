<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

    <title><?php echo $this->meta['meta_title']; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link href="//fonts.googleapis.com/css?family=Roboto:700|Roboto:normal&amp;subset=latin" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css"/>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile.css"/>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/check.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#dialog").dialog({
                dialogClass: "clickoncloseoutside",
                closeOnEscape: true,
                autoOpen: false,
//                    modal: true,
                show: {
                    effect: "fade",
                    duration: 150
                },
                hide: {
                    effect: "fade",
                    duration: 150
                },
                open: function (even, ui) {
                    $(".ui-dialog-titlebar").remove();
                    $('.lighhight').css(
                        {
                            'width': '100%',
                            'height': '100%',
                            'top': '0',
                            'left': '0',
                            'right': '0',
                            'bottom': '0',
                            'position': 'fixed',
                            'z-index': '9',
                            'background': '#000',
                            'opacity': '0.6'
                        }
                    );
                    $('.ui-dialog').css('z-index', '99');
                },
                close: function () {
                    $('.lighhight').remove();
                },
            });

            if (!_cookie('dialog') && !detectMobile()) {
                _cookie('dialog', 'dialog1', 1);

                setTimeout(function () {
                    $("#dialog").dialog("open");
                }, 5000); // milliseconds
            }

            $("#iconmenu").click(function () {
                $("#navbar-default").toggle(300);
            });

            $('html').bind('click', function (e) {
                if (
                    $('#dialog').dialog('isOpen')
                    && !$(e.target).is('.ui-dialog, a')
                    && !$(e.target).closest('.ui-dialog').length
                ) {
                    $('#dialog').dialog('close');
                }
            });
        });
    </script>
</head>

<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1695154867379686";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/586730c17418a41587c626b2/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->


<?php
$cs = Yii::app()->clientScript;
$themePath = Yii::app()->request->baseUrl . '/themes';

/**
 * StyleSHeets
 */
$cs->registerCssFile($themePath . '/assets/css/bootstrap.css');
$cs->registerCssFile($themePath . '/assets/css/bootstrap-theme.css');

/**
 * JavaScripts
 */
$cs->registerCoreScript('jquery', CClientScript::POS_END);
$cs->registerCoreScript('jquery.ui', CClientScript::POS_END);
$cs->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END);
$cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
?>

<div id="wrapper" class="demo-1">
    <?php $this->renderPartial('../template/header'); ?>
    <?php echo $content; ?>
    <?php $this->renderPartial('../template/footer'); ?>
</div>

<div class="lighhight"></div>

<div id="dialog" title="Basic dialog">
    <div class="row margin-bottom-30">
        <h2>Mỹ Đình Pearl</h2>
        <div class="sub-line">CƠ HỘI HIẾM HOI TẬN HƯỞNG KHÔNG GIAN SỐNG MƠ ƯỚC</div>
        <div class="lienhe">Liên hệ chọn căn tầng đẹp nhất & Tham quan nhà mẫu</div>
        <div class="dialog-hotline">HOTLINE: 0943 74 9209</div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1_be_boi_my_dinh_pearl-1.jpg"
                 style="width:100%;"/>
        </div>
        <div class="col-md-7">
            <div class="form-popup">
                <form method="post" role="form">
                    <div class="form-group">
                        <input placeholder="Họ và tên*" class="form-control" name="Dangky[name]" value="" required=""
                               type="text"/>
                    </div>

                    <div class="form-group">
                        <input placeholder="Số điện thoại" class="form-control" name="Dangky[mobile]" value=""
                               required="" type="text"/>
                    </div>

                    <div class="form-group">
                        <input placeholder="Email" class="form-control" name="Dangky[email]" value="" required=""
                               type="email"/>
                    </div>

                    <div class="form-group">
                        <input value="ĐĂNG KÝ NGAY" type="submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['Dangky'])) {
    $dangky = new Contact;
    $dangky->name = $_POST['Dangky']['name'];
    $dangky->mobile = $_POST['Dangky']['mobile'];
    $dangky->email = $_POST['Dangky']['email'];
    if ($dangky->validate()) {
        $dangky->save();

        $subject = 'Đăng ký mới từ BdsMydinhPearl';
        $content = '<html><head><title>'.$subject.'</title><meta http-equiv=\'Content-Type\' content=\'text/html; charset=UTF-8\'></head><body>
                    <p>Tên: ' . $dangky->name . '</p>' .
            '<p>Email: ' . $dangky->email . '</p>' .
            '<p>Số điện thoại: ' . $dangky->mobile . '</p>' .
                    '</body></html>';
        $this->sendmail($this->site->mail_to, $this->site->account_send, $this->site->password_send, $subject, $content, 'BdsMydinhpearl');

        $cs = Yii::app()->clientScript;
        $cs->registerScript('my_script', 'alert("Chúc mừng bạn đã đăng ký thành công. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất có thể!");', CClientScript::POS_READY);
    }
}
?>
</body>
</html>
