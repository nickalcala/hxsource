<?php
/* @var $this DoctorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Doctors',
);
?>

<h1>Doctors</h1>
<div class="col-md-12">
<?php $this->widget('booster.widgets.TbGridView', array(
	'dataProvider'=>$dataProvider,
    'columns' => array(
        array('name' => 'Fullname', 'value' => '$data->getFullname()'),
        array('name' => 'type', 'value' => '$data->doctorType->name'),
        'contact_no',
        'schedule',
        'address',
        array(
            'class' => 'booster.widgets.TbButtonColumn'
        ),
    ),
)); ?>
</div>
