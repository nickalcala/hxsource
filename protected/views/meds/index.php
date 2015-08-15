<?php
/* @var $this MedsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medicines',
);

?>

<h1>Medicines</h1>

<div class="col-md-12">
    <?php $this->widget('booster.widgets.TbGridView', array(
        'dataProvider'=>$dataProvider,
        'columns' => array(
            'name',
            'description'
        ),
    )); ?>
</div>