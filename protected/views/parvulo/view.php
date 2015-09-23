<?php
/* @var $this ParvuloController */
/* @var $model Parvulo */

$this->breadcrumbs=array(
	'Parvulos'=>array('admin'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'Mostrar Parvulo', 'url'=>array('admin')),
	array('label'=>'Crear Parvulo', 'url'=>array('admin')),
	array('label'=>'Actualizar Parvulo', 'url'=>array('update', 'id'=>$model->rut)),
	array('label'=>'Eliminar Parvulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Parvulo', 'url'=>array('admin')),
);
?>

<h1>Ver Parvulo #<?php echo $model->rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'rut',
		'contrasena',
		'talla',
		'peso',
		'email',
		'fecha_nacimiento',
	),
)); ?>
