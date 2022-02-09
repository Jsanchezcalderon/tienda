<?php

class Camposextras extends CActiveRecord
{

	public function tableName()
	{
		return 'camposextras';
	}


	public function rules()
	{
		
		return array(
			array('id_externo', 'numerical', 'integerOnly'=>true),
			array('realiza_compra', 'length', 'max'=>1),
			array('articulo', 'length', 'max'=>50),
			array('precio', 'length', 'max'=>19),
			array('metodo_pago, no_compra', 'length', 'max'=>30),
		);
	}

	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idExterno' => array(self::BELONGS_TO, 'Clientes', 'id_externo'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'realiza_compra' => '¿Desea realizar una compra?',
			'articulo' => 'Articulo',
			'precio' => 'Precio',
			'metodo_pago' => 'Metodo Pago',
			'no_compra' => 'No Compra',
			'id_externo' => 'Id Externo',
		);
	}

	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Camposextras the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getSelectArticulo(){

		$articulos =Camposextras::model()->findAll('realiza_compra=?',array('s'));
		
		return CHtml::listData($articulos,'id','articulo');
	}

	public function getSelectMetodoPago(){

		$metodo =Camposextras::model()->findAll();
		
		return CHtml::listData($metodo,'id','metodo_pago');
	}
}
