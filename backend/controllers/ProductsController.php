<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use backend\models\Products;
use yii\data\ActiveDataProvider;

class ProductsController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'rules'=>[
                    [
                        'actions'=>['addproduct','index','showproducts','delete'],
                        'allow'=>true,
                        'roles'=>['@'],
                    ]
                ]
            ],

        ];
    }

    public function actions()
    {
        return [
            'error'=>[
                'class'=>'yii\web\ErrorAction',
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     * 产品添加
     */
    public function actionAddproduct()
    {
        $model=new Products();
        $request=Yii::$app->request->post();

        if($model->load($request)){
            $model->begin_time=strtotime($request['Products']['begin_time']);
            $model->end_time=strtotime($request['Products']['end_time']);
            if($model->validate()){
                $model->save();
                return $this->render('showproducts');
            }else{
                print_r($model->getErrors());
            }
        }
        return $this->render('addproduct',['model'=>$model]);

    }
    /**
     * 显示产品列表
     */
    public function actionShowproducts(){
        return $this->render('showproducts');
    }
    /**
     * 删除产品
     */
    public function actionDelete(){
        $params=Yii::$app->request->get();
        $deleteProduct=Products::findOne($params['id']);
        $deleteProduct->delete();
        return $this->render('showproducts');
    }

}
