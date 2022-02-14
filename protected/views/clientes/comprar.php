<h1></h1>

<div class="form">
    <?php $form = $this->beginWidget('CActiveForm'); ?>

    <h1> Cliente #<?php echo $modeloCliente->id ?> </h1>

    <?php echo $form->errorSummary($model); ?>


    <div class="row">

        <?php
        $htmlOptions = array(
            'ajax' => array(),
            'empty' => 'Seleccione---'
        )
        ?>

        <?php echo $form->labelEx($model, 'realiza_compra'); ?>
        <?php echo $form->dropDownList($model, 'realiza_compra', array('s' => 'Si', 'n' => 'No'), $htmlOptions);
        ?>

        <div id="sicompra" hidden>
            <?php
            /* $this->renderPartial('_sicompra', array('model' => $model, 'modeloCliente' => $modeloCliente, 'form' => $form)); */
            ?>
            <h1>Decidio comprar</h1>
            <div class="row">
                <?php echo $form->labelEx($model, 'articulo'); ?>
                <?php echo $form->dropDownList($model, 'articulo', array('computador' => 'Computador', 'portatil' => 'Portatil', 'diademas' => 'Diademas'), array('empty' => 'Selecciona....')); ?>
                <?php echo $form->error($model, 'articulo'); ?>

            </div>
            <div class="row">
                <?php echo $form->labelEx($model, 'precio'); ?>
                <?php echo $form->numberField($model, 'precio'); ?>
                <?php echo $form->error($model, 'precio'); ?>

            </div>
            <div class="row">
                <?php echo $form->labelEx($model, 'metodo_pago'); ?>
                <?php echo $form->dropDownList($model, 'metodo_pago', array('tarjeta' => 'Tarjeta de credito', 'efectivo' => 'Efectivo'), array('empty' => 'Seleccione-------')); ?>
                <?php echo $form->error($model, 'metodo_pago'); ?>

            </div>


            <?php echo $form->hiddenField($model, 'id_externo', array('value' => $modeloCliente->id)); ?>


            <?php echo Chtml::submitButton('guardar', array('id' => 'guardar')) ?>

            <script>

                $('#guardar').click(function(){
                    alert('guardado');
                })

            </script>

        </div>

        <div id="nocompra" hidden>
            <?php
            /* $this->renderPartial('_nocompra', array('model' => $model, 'modeloCliente' => $modeloCliente, 'form' => $form)); */
            ?>
            <h1>Decide no comprar</h1>

            <div class="row">
                <?php echo $form->labelEx($model, 'no_compra'); ?>
                <?php echo $form->dropDownList($model, 'no_compra', array('muy caro' => 'Muy Caro', 'se lo piensa mejor' => 'Se lo piensa mejor', 'no le interesa' => 'No le interesa'), array('empty' => 'Selecciona....')); ?>
                <?php echo $form->error($model, 'no_compra'); ?>

            </div>

            <?php echo $form->hiddenField($model, 'id_externo', array('value' => $modeloCliente->id)); ?>


            <?php echo CHtml::submitButton('guardar', array('id' => 'guardarno')) ?>


        </div>


    </div>


    <?php $this->endWidget(); ?>



    <script>
        $('#Camposextras_realiza_compra').change(function() {
            if ($('#Camposextras_realiza_compra').val() == 's') {
                $('#sicompra').attr('hidden', false);
                $('#nocompra').attr('hidden', true);
                $('#Camposextras_no_compra').val('');

            } else if ($('#Camposextras_realiza_compra').val() == 'n') {
                $('#sicompra').attr('hidden', true);
                $('#nocompra').attr('hidden', false);
                $('#Camposextras_articulo').val('');
                $('#Camposextras_precio').val('');
                $('#Camposextras_metodo_pago').val('');

            } else {
                $('#sicompra').attr('hidden', true);
                $('#nocompra').attr('hidden', true);
            }


        });
    </script>