<?php

/*
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ValidarFormulario;

class ValidacionEntradaDatos extends Controller {

public function actionValidarformulario() {
        $model=new ValidarFormulario;
        if($model->load(Yii::$app->request->post())){ //carga solicitud POST de validarformulario 
            
            if($model->validate()){
                
              //consultar en una base de datos  
            } else{
             $model->getErrors();   
                
            }
       }
       return $this->render("validarformulario", ["model"=>$model]);
   }
}
*/