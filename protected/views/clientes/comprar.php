<h1></h1>

<div class="form">
    <?php $form = $this->beginWidget('CActiveForm'); ?>

    <h1> Cliente #<?php echo $modeloCliente->id ?> </h1>

    <?php echo $form->errorSummary($model); ?>

    

    <div class="row">

        <?php
        $htmlOptions = array(
            'ajax' => array(
               
            ),
            'empty' => 'Seleccione---'
        )
        ?>

        <?php echo $form->labelEx($model, 'realiza_compra'); ?>
        <?php echo $form->dropDownList($model, 'realiza_compra', array('s' => 'Si', 'n' => 'No'), $htmlOptions);
        ?>

        <div id="sicompra" hidden>
            <?php
            $this->renderPartial('_sicompra', array('model' => $model, 'modeloCliente' => $modeloCliente));

            ?>
        </div>
        <div id="nocompra" hidden>
            <?php

            $this->renderPartial('_nocompra', array('model' => $model, 'modeloCliente' => $modeloCliente));

            ?>
        </div>
    

    </div>


    <?php $this->endWidget(); ?>

    

    <script>

        $('#Camposextras_realiza_compra').change(function() {
            if ($('#Camposextras_realiza_compra').val() == 's') {
                $('#sicompra').attr('hidden', false);
                $('#nocompra').attr('hidden', true);

            }else if($('#Camposextras_realiza_compra').val() == 'n'){
                $('#sicompra').attr('hidden', true);
                $('#nocompra').attr('hidden', false);

            }else{
                $('#sicompra').attr('hidden', true);
                $('#nocompra').attr('hidden', true);                
            }

        });

    </script>