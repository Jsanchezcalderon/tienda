<h1></h1>

<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'compra-form',
        'enableAjaxValidation' => true,
    )); ?>

    <h1> Cliente #<?php echo $modeloCliente->id ?> </h1>

    <?php echo $form->errorSummary($model); ?>


    <div class="row">

    
        <?php echo $form->labelEx($model, 'realiza_compra'); ?>
        <?php echo $form->dropDownList($model, 'realiza_compra', array('s' => 'Si', 'n' => 'No'),array('empty' => 'Seleccione---','class'=>'btn btn-default dropdown-toggle'));
        ?>

        <div id="sicompra" hidden class="form-group">
            <?php
            $this->renderPartial('_sicompra', array('model' => $model, 'modeloCliente' => $modeloCliente, 'form' => $form));
            ?>


        </div>

        <div id="nocompra" hidden class="form-group">
            <?php
            $this->renderPartial('_nocompra', array('model' => $model, 'modeloCliente' => $modeloCliente, 'form' => $form));
            ?>

        </div>


    </div>


    <?php $this->endWidget(); ?>



    <script>
        $(document).ready(function() {
            if ($('#compra-form_es_').is(':visible')) {
                if ($('#Camposextras_realiza_compra').val() == 's') {
                    $('#sicompra').attr('hidden', false);
                    $('#nocompra').attr('hidden', true);            

                } else if ($('#Camposextras_realiza_compra').val() == 'n') {
                    $('#sicompra').attr('hidden', true);
                    $('#nocompra').attr('hidden', false);

                } else {
                    $('#sicompra').attr('hidden', true);
                    $('#nocompra').attr('hidden', true);
                }

                    }
            $('#Camposextras_realiza_compra').change(function() {
                if ($('#Camposextras_realiza_compra').val() == 's') {
                    $('#sicompra').attr('hidden', false);
                    $('#nocompra').attr('hidden', true);
                    $('#Camposextras_no_compra').val('');
                    if($('#Camposextras_articulo').hasClass('error') || $('#iCamposextras_precio').hasClass('error') || $('#Camposextras_metodo_pago').hasClass('error') ){
                        $('#compra-form_es_').css({'display':'block'});
                    }else{
                        $('#compra-form_es_').css({'display':'none'});

                    }


                } else if ($('#Camposextras_realiza_compra').val() == 'n') {
                    $('#sicompra').attr('hidden', true);
                    $('#nocompra').attr('hidden', false);
                    $('#Camposextras_articulo').val('');
                    $('#Camposextras_precio').val('');
                    $('#Camposextras_metodo_pago').val('');
                    if($('#Camposextras_no_compra').hasClass('error')){
                        $('#compra-form_es_').css({'display':'block'});
                    }else{
                        $('#compra-form_es_').css({'display':'none'});
                    }

                } else {
                    $('#sicompra').attr('hidden', true);
                    $('#nocompra').attr('hidden', true);
                    if ($('#compra-form_es_').is(':visible')) {
                        $('#compra-form_es_').css({'display':'none'});
                    }
                }


            });

        });


      
    </script>