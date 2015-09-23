<?php
/* @var $this EducadoraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Educadoras',
);

$this->menu=array(
	array('label'=>'Crear Educadora', 'url'=>array('create')),
	array('label'=>'Administar Educadora', 'url'=>array('admin')),
);
?>

<h1>Educadoras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
