<?php
/* @var $this TreatmentController */
/* @var $model Treatment */

$this->breadcrumbs=array(
	'Treatments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Treatment', 'url'=>array('index')),
	array('label'=>'Create Treatment', 'url'=>array('create')),
	array('label'=>'View Treatment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Treatment', 'url'=>array('admin')),
);
?>

<h1>Update Treatment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>