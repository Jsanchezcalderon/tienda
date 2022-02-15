<div class="container">
    <h2> Listado de compras reealizadas por: <?php echo $modeloCliente->nombre_cliente ?> </h2>
    <h3> Total compras efectivas: <?php echo $total ?> </h3>

    <?php echo CHtml::link(
        'Ir a compras',
        yii::app()->createUrl('clientes/comprar', array('id' => $modeloCliente->id)),
        array('class' => 'btn btn-large btn-primary')

    ); ?>


    <?php echo CHtml::link(
        'Registrar nuevo cliente',
        yii::app()->baseUrl . '/clientes/create',
        array('class' => 'btn btn-large btn-primary')

    ); ?>

</div>
<br>

<div class="container">
    <div class="container-fluid">

        <table class="table table-hover ">
            <tr>
                <th>Articulo</th>
                <th>Precio</th>
                <th>Metodo Pago</th>
            </tr>


            <?php foreach ($modelCompra as $data) : ?>

                <tr>
                    <td><?php echo CHtml::encode($data->articulo) ?></td>
                    <td><?php echo Chtml::encode($data->precio); ?></td>
                    <td><?php echo Chtml::encode($data->metodo_pago); ?></td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</div>