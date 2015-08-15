<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

// $this->pageTitle=Yii::app()->name . ' - Contact Us';
// $this->breadcrumbs=array(
// 	'Contact',
// );
?>
<ul class="breadcrumb">
  <li><a href="site/index">Home</a></li>
  <li class="active">Contact</li>
</ul>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div class="row">
	<div class="col-lg-6">
		<form class="form-horizontal">
			<fieldset>
				<legend><h1> Contact Us</h1></legend>
				<?php if(Yii::app()->user->hasFlash('contact')): ?>
				<div class="flash-success">
					<?php echo Yii::app()->user->getFlash('contact'); ?>
				</div>
				<?php else: ?>
				<p>
				If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
				</p>

				<div class="alert alert-dismissible alert-warning">
		 	 		<p class="note">Fields with <span class="required">*</span> are required.</p>
		 	 	</div>
				<?php echo $form->errorSummary($model); ?>
				<div class="form-group">
					<?php echo $form->labelEx($model,'name', array('class' => 'col-lg-2 form-label')); ?>
					<div class="col-lg-10">
						<?php echo $form->textField($model,'name', array('class' => 'form-control')); ?>
						<?php echo $form->error($model,'name', array('class' => 'form-label')); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'email', array('class' => 'col-lg-2 form-label')); ?>
					<div class="col-lg-10">
						<?php echo $form->textField($model,'email', array('class' => 'form-control')); ?>
						<?php echo $form->error($model,'email', array('class' => 'form-label')); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'subject', array('class' => 'col-lg-2 form-label')); ?>
					<div class="col-lg-10">
						<?php echo $form->textField($model,'subject',array('class' => 'form-control'), array('size'=>60,'maxlength'=>128)); ?>
						<?php echo $form->error($model,'subject', array('class' => 'form-label')); ?>
					</div>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'body', array('class' => 'col-lg-2 form-label')); ?>
					<div class="col-lg-10">
						<?php echo $form->textArea($model,'body',array('class' => 'form-control') ,array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model,'body', array('class' => 'form-label')); ?>
					</div>
				</div>

				<?php if(CCaptcha::checkRequirements()): ?>
				<div class="form-group">
					<?php echo $form->labelEx($model,'verifyCode', array('class' => 'col-lg-2 form-label')); ?>
					<div class="col-lg-10">
						<?php $this->widget('CCaptcha'); ?>
						<?php echo $form->textField($model,'verifyCode' , array('class' => 'form-control')); ?>
					</div>
					<div class="hint">Please enter the letters as they are shown in the image above.
					<br/>Letters are not case-sensitive.</div>

					<?php echo $form->error($model,'verifyCode', array('class' => 'form-label')); ?>
				</div>
				<?php endif; ?>

				<div class="row buttons">
					<?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
				</div>
			</fieldset>
		</form>
	</div>
</div>


<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>