<?php if ($this->site->is_page == 1): ?>
    <div class="container">
        <h1 class="page-title"><?php echo $model->title; ?></h1>

        <?php if (isset($firstContent) && $firstContent): ?>
            <?php foreach ($firstContent as $i): ?>
                <div class="uudai margin-bottom-30">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-xs-12">
                            <h2 class="uudai-heading"><?php echo $i->label; ?></h2>
                        </div>
                        <div class="img-space">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/space-300x14.png" width="300" height="14" />
                        </div>
                        <div class="uudai-content col-md-12">
                            <?php echo $i->data; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="hotline-register margin-bottom-30">
            <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <div class="hotline-left">
                        <div class="deal_phone">
                            Gọi ngay&nbsp;<span>(+84) 0943 74 9209</span>
                        </div>
                        <div class="deal_info">
                            <ul>
                                <li>Để có căn hộ view đẹp, hợp phong thủy</li>
                                <li>Giá bán CĐT và ưu đãi hấp dẫn nhất</li>
                                <li>Được tư vấn lựa chọn các gói vay có lãi suất thấp nhất, thời gian vay dài nhất</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-xs-12">
                    <div class="register-right">
                        <div class="register-heading">Đừng bỏ lỡ những thông tin mới nhất về chung cư Mỹ Đình Pearl </div>
                        <div class="register_note">
                            <ul>
                                <li>Giá bán - Chính sách - Tiến độ </li>
                                <li>Mặt bằng căn hộ</li>
                                <li>Hợp đồng mẫu</li>
                                <li>... và nhiều thông tin hữu ích khác</li>
                            </ul>
                            <div class="c"></div>
                        </div>
                        <div class="clearfix"></div>
                        <form class="frm-dangky" action="" method="post" role="form" data-toggle="validator">
                            <div class="dangky-inner">
                                <div class="col-md-3 margin-bottom-xs-15">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-2">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/form-dang-ky1.png" />
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-9 col-xs-10">
                                            <input class="form-control" name="Contact[name]" type="text" placeholder="Họ tên" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 margin-bottom-xs-15">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-2">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/form-dang-ky2.png" />
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-9 col-xs-10">
                                            <input class="form-control" name="Contact[mobile]" type="text" placeholder="Số điện thoại" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 margin-bottom-xs-15">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-2">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/form-dang-ky3.png" style="position: absolute; top:4px;" />
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-9 col-xs-10">
                                            <input class="form-control" name="Contact[email]" type="text" placeholder="Email" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <input type="submit" value="Đăng Ký">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="entry-content">
            <?php echo $model->content; ?>
        </div>

        <div class="sub-information margin-top-20" id="sub-information">
            <h3 class="box-title">Hệ thống tiện ích đẳng cấp và chất lượng</h3>
            <div class="row">
                <div class="col-sm-7 col-xs-12">
                    <?php if (isset($features) && $features): ?>
                        <div class="row">
                            <?php foreach ($features as $d): ?>
                                <div class="col-sm-6 col-xs-12 margin-bottom-30">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $d->image; ?>" style="width: 100%;" />
                                    <div class="sub-title"><?php echo $d->label; ?></div>
                                    <p class="sub-desc"><?php echo $d->content; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-5 col-xs-12">
                    <div class="video margin-bottom-30">
                        <div class="video-box showbox" style="display: block;">
                            <!--                            <div style="background-image: url(&quot;http://bdsmydinh.dev/images/test2.jpg&quot;); display: block;" class="thumb"></div>-->
                            <div class="play"></div>
                            <iframe width="640" height="390" frameborder="0" id="video" allowfullscreen="1" title="YouTube video player" src="https://www.youtube.com/embed/dAAnrQRwERI"></iframe>
                        </div>
                    </div>
                    <div class="frmRegister">
                        <p>Đăng ký nhận ưu đãi cực lớn từ Chủ đầu tư</p>
                        <form method="post" role="form" data-toggle="validator" id="myform">
                            <div class="form-group">
                                <input type="text" name="Contact[name]" class="form-control" placeholder="Họ tên" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="Contact[email]" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="Contact[mobile]" class="form-control" placeholder="Số điện thoại" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="Contact[content]" rows="5" placeholder="Thông điệp muốn gửi" ></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Gửi đi" class="btn btn-default">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="why-me hidden-xs">
            <h3 class="box-title text-center">Tại sao chọn chúng tôi</h3>
            <div class="why-me-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item-section3">
                            <div class="img-sc3">
                                <img src="http://hailongland.vn/goldenfield/wp-content/uploads/2016/08/section3-1.png">
                            </div>
                            <a>THÔNG TIN NHANH &amp; ĐẦY ĐỦ NHẤT</a>
                            <p>Thông tin mở bán dự án
                                Chính sách bán hàng
                                Tiến độ dự án được cập nhật liên tục</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item-section3">
                            <div class="img-sc3">
                                <img src="http://hailongland.vn/goldenfield/wp-content/uploads/2016/08/section3-2.png">
                            </div>
                            <a>MUA ĐƯỢC NHÀ VỚI GIÁ GỐC</a>
                            <p>Mua với giá gốc, không chênh
                                Ký hợp đồng trực tiếp với chủ đầu tư
                                Được hưởng tất cả các ưu đãi </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item-section3">
                            <div class="img-sc3">
                                <img src="http://hailongland.vn/goldenfield/wp-content/uploads/2016/08/section3-3.png">
                            </div>
                            <a>THỦ TỤC NHANH GỌN GÓI VAY ƯU ĐÃI NHẤT</a>
                            <p>Tư vấn, hỗ trợ làm thủ tục pháp lý
                                Được vay các gói vay có lãi suất thấp nhất thị trường
                                Thời gian vay lên tới 25 năm</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item-section3">
                            <div class="img-sc3">
                                <img src="http://hailongland.vn/goldenfield/wp-content/uploads/2016/08/section3-4.png">
                            </div>
                            <a>THIẾT KẾ NỘI THẤT ĐẸP VỚI CHI PHÍ TIẾT KIỆM</a>
                            <p>Được tư vấn miễn phí bởi các đơn vị tư vấn thiết kế uy tín
                                Được tham khảo hàng ngàn mẫu thiết kế căn hộ mẫu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.video-box').on('click', '.play', function() {
                $('.video-box .play').addClass('hidden');
                $('.video-box > iframe#video').css('display', 'block');
                var urlauto = $('.video-box > iframe#video').attr('src') + "?autoplay=1";
                $('.video-box > iframe#video').attr('src', urlauto);
            });

            var width = $('.video-box').width();
            var height = width / 1.72;
            $('.video-box').css('height', height + 'px');

            $(window).resize(function() {
                width = $('.video-box').width();
                height = width / 1.72;
                $('.video-box').css('height', height + 'px');
            });
        });

    </script>
<?php endif; ?>