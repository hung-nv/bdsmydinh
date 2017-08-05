<h1 class="page-title margin-bottom-30"><?php echo $category->title; ?></h1>
<div class="content_category margin-bottom-30">
    <?php if (isset($news) && $news): ?>
        <?php foreach ($news as $item): ?>
            <div class="row margin-bottom-20">
                <div class="col-sm-6 col-xs-12 margin-bottom-20">
                    <a href="<?php echo $item->setUrl(); ?>"><img src="<?php echo $item->setImageUrl(); ?>" style="width: 100%;"></a>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h2 class="entry-title"><?php echo $item->title; ?></h2>
                    <div class="entry-infor"><i class="fa fa-clock-o"></i> <?php echo $item->setDate(); ?></div>
                    <div class="entry-except"><?php echo $item->setDescription(); ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</div>