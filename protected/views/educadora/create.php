<?php
/* @var $this EducadoraController */
/* @var $model Educadora */

$this->breadcrumbs=array(
	'Educadoras'=>array('index'),
	'Educadora',
);

$this->menu=array(
	array('label'=>'Mostrar Educadora', 'url'=>array('index')),
	array('label'=>'Administrar Educadora', 'url'=>array('admin')),
);
?>

<h1>Agregar Educadora</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>