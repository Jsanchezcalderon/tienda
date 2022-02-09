<?php


class Clientes extends CActiveRecord{

    public function tableName()
    {
        return 'clientes';
    }
    public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cedula' => 'Cedula',
			'nombre_cliente' => 'Nombre cliente',
			'telefono' => 'Telefono',
			'email' => 'Correo',
			'genero' => 'Genero',
		);
	}

    public function rules()
    {
        return array(
            array('cedula, 	nombre_cliente, telefono, email, genero', 'required'),
            array('cedula, telefono', 'numerical', 'integerOnly'=>true),
            array('cedula','unique'),
            array('email','email'),
            array('genero','length', 'max'=>1),
            

        );
    }

    public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'camposextrases' => array(self::HAS_MANY, 'Camposextras', 'id_externo'),
		);
	}

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    

}

?>