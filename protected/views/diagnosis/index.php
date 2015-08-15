<?php
/* @var $this DiagnosisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Diagnosises',
);

$this->menu=array(
	array('label'=>'Create Diagnosis', 'url'=>array('create')),
	array('label'=>'Manage Diagnosis', 'url'=>array('admin')),
);
?>

<h1>Diagnosis</h1>

<div class="col-md-12">
    <?php $this->widget('booster.widgets.TbGridView', array(
        'dataProvider'=>$dataProvider,
        'columns' => array(
            'name'
        ),
    )); ?>
</div>
