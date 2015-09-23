<?php
/* @var $this EducadoraController */
/* @var $model Educadora */

$this->breadcrumbs=array(
	'Educadoras'=>array('admin'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'Mostrar Educadora', 'url'=>array('admin')),
	array('label'=>'Crear Educadora', 'url'=>array('admin')),
	array('label'=>'Actualizar Educadora', 'url'=>array('update', 'id'=>$model->rut)),
	array('label'=>'Elininar Educadora', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Educadora', 'url'=>array('admin')),
);
?>

<h1>View Educadora #<?php echo $model->rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'rut',
		'contrasena',
		'email',
	),
)); ?>
