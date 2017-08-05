<section class="content">
    <div class="row">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'user-form',
            'enableAjaxValidation' => false,
            'htmlOptions' => array('role' => 'form', 'data-toggle' => 'validator')
        ));
        ?>
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Meta Tags</h3>                                    
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'meta_title'); ?>
                        <?php echo $form->textField($model, 'meta_title', array('class' => 'form-control', 'required' => 'required')); ?>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'meta_description'); ?>
                        <?php echo $form->textField($model, 'meta_description', array('class' => 'form-control', 'required' => 'required')); ?>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'meta_keywords'); ?>
                        <?php echo $form->textField($model, 'meta_keywords', array('class' => 'form-control')); ?>
                        <div class="help-block with-errors"></div>
                    </div>

                </div>

            </div>
            
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Social</h3>                                    
                </div>

                <div class="box-body">
                    
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'fanpage'); ?>
                        <?php echo $form->textField($model, 'fanpage', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'fanpage'); ?>
                    </div>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'youtube'); ?>
                        <?php echo $form->textField($model, 'youtube', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'youtube'); ?>
                    </div>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'googlemap'); ?>
                        <?php echo $form->textField($model, 'googlemap', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'googlemap'); ?>
                    </div>

                    <div class="form-group">
                        <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-success', 'style' => 'margin-top:20px;')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">General</h3>                                    
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $form->labelEx($model, 'phone'); ?>
                                <?php echo $form->textField($model, 'phone', array('class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'phone'); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $form->labelEx($model, 'skype'); ?>
                                <?php echo $form->textField($model, 'skype', array('class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'skype'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $form->labelEx($model, 'address'); ?>
                                <?php echo $form->textField($model, 'address', array('class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'address'); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $form->labelEx($model, 'hotline'); ?>
                                <?php echo $form->textField($model, 'hotline', array('class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'hotline'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $form->labelEx($model, 'email'); ?>
                                <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'email'); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $form->labelEx($model, 'fax'); ?>
                                <?php echo $form->textField($model, 'fax', array('class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'fax'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'news_ids'); ?>
                        <?php echo $form->textField($model, 'news_ids', array('class' => 'form-control')); ?>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'mail_to'); ?>
                        <?php echo $form->textField($model, 'mail_to', array('class' => 'form-control')); ?>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'account_send'); ?>
                        <?php echo $form->textField($model, 'account_send', array('class' => 'form-control')); ?>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'password_send'); ?>
                        <?php echo $form->textField($model, 'password_send', array('class' => 'form-control')); ?>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</section>