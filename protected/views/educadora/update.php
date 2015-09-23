<?php
/* @var $this EducadoraController */
/* @var $model Educadora */

$this->breadcrumbs=array(
	'Educadoras'=>array('index'),
	$model->rut=>array('view','id'=>$model->rut),
	'Update',
);

$this->menu=array(
	array('label'=>'Mostrar Educadora', 'url'=>array('index')),
	array('label'=>'Crear Educadora', 'url'=>array('create')),
	array('label'=>'Ver Educadora', 'url'=>array('view', 'id'=>$model->rut)),
	array('label'=>'Administrar Educadora', 'url'=>array('admin')),
);
?>

<h1>Actualizar Educadora <?php echo $model->rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>