<div class="container">
    <h1 class="page-title"><?php echo $model->title; ?></h1>
    <div class="entry-content margin-bottom-30">
        <?php echo $model->content; ?>
    </div>
    
    <?php $this->renderPartial('_tplRegister', array('contact' => $contact)); ?>
</div>