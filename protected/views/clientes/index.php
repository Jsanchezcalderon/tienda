<h1>Ingrese sus datos</h1>

<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'compra-form',
	'enableAjaxValidation'=>true,
)); ?>

<?php echo $form->errorSummary($model); ?>


<div class="row">
    <?php echo $form->labelEx($model, 'cedula'); ?>
    <?php echo $form->numberField($model,'cedula');?>
    <?php echo $form->error($model, 'cedula');?>

</div>
<div class="row">
    <?php echo $form->labelEx($model, 'nombre_cliente'); ?>
    <?php echo $form->textField($model,'nombre_cliente');?>
    <?php echo $form->error($model, 'nombre_cliente');?>

</div>
<div class="row">
    <?php echo $form->labelEx($model, 'telefono'); ?>
    <?php echo $form->numberField($model,'telefono',array('maxlength'=>10,
    /* 'oninput'=>'if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' */));?>
    <?php echo $form->error($model, 'telefono');?>

</div>
<div class="row">
    <?php echo $form->labelEx($model, 'email'); ?>
    <?php echo $form->textField($model,'email');?>
    <?php echo $form->error($model, 'email');?>

</div>
<div class="row">
    <?php echo $form->labelEx($model, 'genero'); ?>
    <?php echo $form->dropDownList($model,'genero',array('m'=>'Mujer', 'h'=>'Hombre'), array('empty'=>'Selecciona....'));?>
    <?php echo $form->error($model, 'genero');?>

</div>

<?php echo Chtml::submitButton('Continuar') ?>



<?php $this->endWidget();?>

</div>
