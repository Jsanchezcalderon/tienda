<div class="container">
    <div class="container-fluid">


        <h1>Clientes</h1>
        <table class="table table-hover ">
            <tr>
                <th>Cedula</th>
                <th>Nombre cliente</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Genero</th>
                <th></th>

            </tr>


            <?php foreach ($model as $data) : ?>

                <tr>
                    <td><?php echo CHtml::encode($data->cedula) ?></td>
                    <td><?php echo Chtml::encode($data->nombre_cliente); ?></td>
                    <td><?php echo Chtml::encode($data->telefono); ?></td>
                    <td><?php echo CHtml::encode($data->email) ?></td>
                    <td><?php echo CHtml::encode($data->genero) ?></td>
                    <td><?php echo CHtml::link(
                            'Ver Compras',
                            yii::app()->createUrl('clientes/view', array('id' => $data->id)),
                            array('class' => 'btn btn-large btn-primary')

                        ); ?></td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</div>