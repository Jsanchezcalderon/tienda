<h1>Decide no comprar</h1>

<div class="form">
 

    <div class="row">
        <?php echo $form->labelEx($model, 'no_compra'); ?>
        <?php echo $form->dropDownList($model, 'no_compra', array('muy caro' => 'Muy Caro', 'se lo piensa mejor' => 'Se lo piensa mejor', 'no le interesa' => 'No le interesa'), array('empty' => 'Selecciona....')); ?>
        <?php echo $form->error($model, 'no_compra'); ?>

    </div>

    <?php echo $form->hiddenField($model, 'id_externo', array('value' => $modeloCliente->id)); ?>


    <?php echo CHtml::submitButton('guardar', array('id' => 'guardarno')) ?>


</div>