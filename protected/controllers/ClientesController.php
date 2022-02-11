<?php
class ClientesController extends Controller
{

    public $layout = '//layouts/column2';

    public function actionIndex()
    {
        $model =  new Clientes;

        if (isset($_POST['Clientes'])) {
            $model->attributes = $_POST['Clientes'];
            if ($model->save()) {
                $this->redirect(array('comprar', 'id' => $model->id));
            }
        }
        $this->render('index', array('model' => $model));
    }



    public function actionComprar($id)
    {     
        
        
        $modeloCliente = Clientes::model()->findByPk($id);
        $model = new Camposextras;
        if (isset($_POST['Camposextras']['realiza_compra'])){            
            $select = $_POST['Camposextras']['realiza_compra'];
            if($select == 'n'){
                $model = new Camposextras('no_compra');
                $model->realiza_compra =$_POST['Camposextras']['realiza_compra'];
                $model->no_compra =$_POST['Camposextras']['no_compra'];
                $model->id_externo =$_POST['Camposextras']['id_externo'];
                if ($model->save()) {
                    $this->redirect(array('index'));
                }else{
                    $this->render('comprar', array('model' => $model,  'modeloCliente' => $modeloCliente));
                }                
            }else if($select == 's'){
                $model = new Camposextras('comprar');
                $model->realiza_compra =$_POST['Camposextras']['realiza_compra'];
                $model->articulo =$_POST['Camposextras']['articulo'];
                $model->precio =$_POST['Camposextras']['precio'];
                $model->metodo_pago =$_POST['Camposextras']['metodo_pago'];
                $model->id_externo =$_POST['Camposextras']['id_externo'];
                if ($model->save()) {
                    $this->redirect(array('index'));
                }else{
                    $this->render('comprar', array('model' => $model,  'modeloCliente' => $modeloCliente));
                }
            }
        }else{
            $this->render('comprar', array('model' => $model, 'modeloCliente' => $modeloCliente));
          
        }
    }

    protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='compra-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
    }

    /* public function actionValidarRegla(){
        $select = $_POST['Camposextras']['realiza_compra'];

        if($select == 's'){
            Camposextras::model()->reglaSi();
        }else if($select == 'n'){
            Camposextras::model()->reglaNo();
        }
    } */

    
}
