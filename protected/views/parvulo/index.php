<?php
/* @var $this ParvuloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parvulos',
);

$this->menu=array(
	array('label'=>'Crear Parvulo', 'url'=>array('admin')),
	array('label'=>'Administrar Parvulo', 'url'=>array('admin')),
);
?>

<h1>Parvulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
