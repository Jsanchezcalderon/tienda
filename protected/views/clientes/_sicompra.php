<h3>Decidio comprar</h3>


<div class="form">


    <div class="form-group">
        <?php echo $form->labelEx($model, 'articulo'); ?>
        <?php echo $form->dropDownList($model, 'articulo', array('computador' => 'Computador', 'portatil' => 'Portatil', 'diademas' => 'Diademas'), array('empty' => 'Selecciona....','class'=>'btn btn-default dropdown-toggle')); ?>
        <?php echo $form->error($model, 'articulo'); ?>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'precio'); ?>
        <?php echo $form->numberField($model, 'precio', array('class'=>'form-group')); ?>
        <?php echo $form->error($model, 'precio'); ?>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'metodo_pago'); ?>
        <?php echo $form->dropDownList($model, 'metodo_pago', array('tarjeta' => 'Tarjeta de credito', 'efectivo' => 'Efectivo'), array('empty' => 'Seleccione-------','class'=>'btn btn-default dropdown-toggle')); ?>
        <?php echo $form->error($model, 'metodo_pago'); ?>

    </div>


    <?php echo $form->hiddenField($model, 'id_externo', array('value' => $modeloCliente->id)); ?>


    <?php echo Chtml::submitButton('guardar', array('id' => 'guardar', 'class'=>'btn btn-large btn-primary')) ?>


</div>