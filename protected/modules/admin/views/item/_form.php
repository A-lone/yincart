<div class="form">    <?php    $form = $this->beginWidget('CActiveForm', array(        'id' => 'item-form',        'htmlOptions' => array('enctype' => 'multipart/form-data'),        'enableAjaxValidation' => false,            ));    ?>    <p class="note">带星号（<span class="required">*</span>）的是必须的。</p>    <?php echo $form->errorSummary($model); ?>    <div class="grid_13">        <div class="grid_7">            <div class="row">                <?php echo $form->labelEx($model, 'item_name'); ?>                <?php echo $form->textField($model, 'item_name', array('size' => 30, 'maxlength' => 100)); ?>                <?php echo $form->error($model, 'item_name'); ?>            </div>            <div class="row">                <?php echo $form->labelEx($model, 'cate_id'); ?>                <select name="Item[cate_id]" id="Item_cate_id">                     <?php echo $this->parent; ?>                </select>                 <?php echo $form->error($model, 'cate_id'); ?>            </div>            <div class="row">                <?php echo $form->labelEx($model, 'item_sn'); ?>                <?php echo $form->textField($model, 'item_sn', array('size' => 20, 'maxlength' => 60)); ?>                <?php echo $form->error($model, 'item_sn'); ?>            </div>            <div class="row">                <?php echo $form->labelEx($model, 'guige'); ?>                <?php echo $form->textField($model, 'guige', array('size' => 20, 'maxlength' => 60)); ?>                <?php echo $form->error($model, 'guige'); ?>            </div>            <div class="row">                <?php echo $form->labelEx($model, 'caizhi'); ?>                <?php echo $form->textField($model, 'caizhi', array('size' => 20, 'maxlength' => 60)); ?>                <?php echo $form->error($model, 'caizhi'); ?>            </div>            <div class="row">                <?php echo $form->labelEx($model, 'price'); ?>                <?php echo $form->textField($model, 'price', array('size' => 20, 'maxlength' => 60)); ?>                <?php echo $form->error($model, 'price'); ?>            </div>            <!--            <div class="row">            <?php echo $form->labelEx($model, 'if_logo'); ?>            <?php echo $form->dropDownList($model, 'if_logo', array('0' => '否', '1' => '是')); ?>            <?php echo $form->error($model, 'if_logo'); ?>                        </div>-->            <div class="row">                <?php echo $form->labelEx($model, 'item_image'); ?>                <?php echo $form->fileField($model, 'item_image', array('size' => 20, 'maxlength' => 200)); ?>                <?php echo $form->error($model, 'item_image'); ?>            </div>            <div class="row">                <?php echo $form->labelEx($model, 'sort_order'); ?>                <?php echo $form->textField($model, 'sort_order', array('size' => 5, 'maxlength' => 100)); ?>                <?php echo $form->error($model, 'sort_order'); ?>            </div>        </div>        <div class="grid_6">            <?php            if ($model->item_image) {                echo $model->getImage();            } else {                echo '';            }            ?>        </div>    </div>    <div class="clear"></div>    <div class="grid_13">        <div class="row">            <?php echo $form->labelEx($model, 'item_desc'); ?>            <?php            echo $form->textArea($model, 'item_desc', array('rows' => 10, 'cols' => 80));            $this->widget('application.extensions.kindeditor', array(                'id' => 'Item_item_desc',            ));            ?>            <?php echo $form->error($model, 'item_desc'); ?>        </div>    </div>    <div class="clear"></div>    <div class="grid_13">        <div class="grid_7">            <div class="row">                <?php echo $form->labelEx($model, 'if_show'); ?>                <?php echo $form->radioButtonList($model, 'if_show', array('1' => '是', '0' => '否'), array('separator' => '&nbsp;', 'labelOptions' => array('class' => 'labelForRadio'))); ?>                <?php echo $form->error($model, 'if_show'); ?>            </div>            <div class="row">                <?php echo $form->labelEx($model, 'is_new'); ?>                <?php echo $form->radioButtonList($model, 'is_new', array('1' => '是', '0' => '否'), array('separator' => '&nbsp;', 'labelOptions' => array('class' => 'labelForRadio'))); ?>                <?php echo $form->error($model, 'is_new'); ?>            </div>        </div>        <div class="grid_6">            <div class="row">                <?php echo $form->labelEx($model, 'recommended'); ?>                <?php echo $form->radioButtonList($model, 'recommended', array('1' => '是', '0' => '否'), array('separator' => '&nbsp;', 'labelOptions' => array('class' => 'labelForRadio'))); ?>                <?php echo $form->error($model, 'recommended'); ?>            </div>        </div>    </div>    <div class="clear"></div>    <div class="row buttons">        <?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>    </div>    <?php $this->endWidget(); ?></div><!-- form --><script type="text/javascript">    $(function(){         var tid = "<?php echo $model->cate_id; ?>";        $("#Item_cate_id option").each(function(i){            if(this.value == tid)            {                $(this).attr("selected","selected");            }         });     });</script>