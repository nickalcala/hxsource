<?php
/* @var $this DoctorsController */
/* @var $model Doctors */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'doctors-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
    
	<?php echo $form->errorSummary($model); ?>
    <?php echo $form->textFieldGroup($model,'fname',array('size'=>50,'maxlength'=>50)); ?>
    <?php echo $form->textFieldGroup($model,'mname',array('size'=>50,'maxlength'=>50)); ?>
    <?php echo $form->textFieldGroup($model,'lname',array('size'=>50,'maxlength'=>50)); ?>
    <?php echo $form->textFieldGroup($model,'suffix',array('size'=>50,'maxlength'=>50)); ?>
    <?php echo $form->textFieldGroup($model,'address',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->textFieldGroup($model,'lat',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->textFieldGroup($model,'long',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->textFieldGroup($model,'license_no',array('size'=>11,'maxlength'=>11)); ?>
    <?php echo $form->textFieldGroup($model,'ptr_no',array('size'=>11,'maxlength'=>11)); ?>
    <?php echo $form->textFieldGroup($model,'s2_no',array('size'=>11,'maxlength'=>11)); ?>
    <?php echo $form->dropDownListGroup($model,'type', array(
        'widgetOptions' => array(
            'data' => $model->getDoctorTypes()
        )
    )); ?>
    <?php echo $form->textFieldGroup($model,'schedule',array('size'=>11,'maxlength'=>11)); ?>
    <?php echo $form->textFieldGroup($model,'other_info',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->textFieldGroup($model,'license_no',array('size'=>11,'maxlength'=>11)); ?>
    <?php echo $form->textFieldGroup($model,'contact_no',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->textFieldGroup($model,'years_practise',array('size'=>25,'maxlength'=>25)); ?>
    <?php echo $form->textFieldGroup($model,'certifications',array('size'=>50,'maxlength'=>50)); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->