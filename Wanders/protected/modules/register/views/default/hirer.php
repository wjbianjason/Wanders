<h1 class="register-heading"><a href="<?php echo Yii::app()->homeUrl; ?>">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/logo.jpg"></a></h1>
<div class="spilt"></div>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-register',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
    <div class="count">创建账号 </div>
	<div class="row">
		<?php echo $form->labelEx($model,'username',array('class'=>'field-message')); ?>
		<?php echo $form->textField($model,'username',array('placeholder'=>'','class'=>'form-control')); ?>
		<?php echo $form->error($model,'username',array('class'=>'error-message')); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'password',array('class'=>'field-message')); ?>
		<?php echo $form->passwordField($model,'password',array('placeholder'=>'','class'=>'form-control')); ?>
		<?php echo $form->error($model,'password',array('class'=>'error-message')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password2',array('class'=>'field-message')); ?>
		<?php echo $form->passwordField($model,'password2',array('placeholder'=>'','class'=>'form-control')); ?>
		<?php echo $form->error($model,'password2',array('class'=>'error-message')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email',array('class'=>'field-message')); ?>
		<?php echo $form->textField($model,'email',array('placeholder'=>'','class'=>'form-control')); ?>
		<?php echo $form->error($model,'email',array('class'=>'error-message')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address',array('class'=>'field-message')); ?>
		<?php echo $form->textField($model,'address',array('placeholder'=>'','class'=>'form-control')); ?>
		<?php echo $form->error($model,'address',array('class'=>'error-message')); ?>
	</div>
	
	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode',array('class'=>'field-message')); ?>		
		<?php echo $form->textField($model,'verifyCode',array('placeholder'=>'','class'=>'form-control')); ?>
		
		<?php echo $form->error($model,'verifyCode',array('class'=>'error-message')); ?>
		<?php $this->widget('CCaptcha',array('id'=>'verifyCode')); ?>
	</div>
	<?php endif; ?>

	<button class="btn btn-lg btn-primary btn-block" type="submit">注册新用户</button>

<?php $this->endWidget(); ?>

<!-- form -->