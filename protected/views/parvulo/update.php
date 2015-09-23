<?php
/* @var $this ParvuloController */
/* @var $model Parvulo */

$this->breadcrumbs=array(
	'Parvulos'=>array('index'),
	$model->rut=>array('view','id'=>$model->rut),
	'Update',
);

$this->menu=array(
	array('label'=>'Mostrar Parvulo', 'url'=>array('index')),
	array('label'=>'Crear Parvulo', 'url'=>array('create')),
	array('label'=>'VerParvulo', 'url'=>array('view', 'id'=>$model->rut)),
	array('label'=>'Administrar Parvulo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Parvulo <?php echo $model->rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>