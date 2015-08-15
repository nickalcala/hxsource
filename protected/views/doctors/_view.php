<?php
/* @var $this DoctorsController */
/* @var $data Doctors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lname')); ?>:</b>
	<?php echo CHtml::encode($data->lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mname')); ?>:</b>
	<?php echo CHtml::encode($data->mname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('license_no')); ?>:</b>
	<?php echo CHtml::encode($data->license_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ptr_no')); ?>:</b>
	<?php echo CHtml::encode($data->ptr_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s2_no')); ?>:</b>
	<?php echo CHtml::encode($data->s2_no); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schedule')); ?>:</b>
	<?php echo CHtml::encode($data->schedule); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_info')); ?>:</b>
	<?php echo CHtml::encode($data->other_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_no')); ?>:</b>
	<?php echo CHtml::encode($data->contact_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('years_practise')); ?>:</b>
	<?php echo CHtml::encode($data->years_practise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certifications')); ?>:</b>
	<?php echo CHtml::encode($data->certifications); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expertise')); ?>:</b>
	<?php echo CHtml::encode($data->expertise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_dte')); ?>:</b>
	<?php echo CHtml::encode($data->create_dte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modify_dte')); ?>:</b>
	<?php echo CHtml::encode($data->modify_dte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modify_id')); ?>:</b>
	<?php echo CHtml::encode($data->modify_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('long')); ?>:</b>
	<?php echo CHtml::encode($data->long); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	*/ ?>

</div>