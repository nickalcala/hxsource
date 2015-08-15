<?php
/* @var $this DoctorsController */
/* @var $model Doctors */

$this->breadcrumbs=array(
	'Doctors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Doctors', 'url'=>array('index')),
	array('label'=>'Create Doctors', 'url'=>array('create')),
	array('label'=>'Update Doctors', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Doctors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Doctors', 'url'=>array('admin')),
);
?>

<h1>View Doctors #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fname',
		'lname',
		'mname',
		'license_no',
		'ptr_no',
		's2_no',
		'type',
		'schedule',
		'other_info',
		'contact_no',
		'years_practise',
		'certifications',
		'expertise',
		'create_dte',
		'create_id',
		'modify_dte',
		'modify_id',
		'lat',
		'long',
		'address',
	),
)); ?>
