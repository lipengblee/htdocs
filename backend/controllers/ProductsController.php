<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use backend\models\Products;
use backend\models\UploadImg;
use yii\web\UploadedFile;


class ProductsController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'rules'=>[
                    [
                        'actions'=>['addproduct','index','showproducts','delete','view','upload','update','search'],
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
            ],
            'upload' => [
                'class' => 'kucha\ueditor\UEditorAction',
                'config' => [
                    "imagePathFormat" => "/uploads/contentImg/{yyyy}{mm}{dd}/{time}{rand:6}", //上传保存路径
                    "imageRoot" => Yii::getAlias("@webroot"),
                    'imageManagerListPath'=>'/uploads/contentImg/',
                ],
            ],
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
                if($_FILES['Products']['name']['thumbnail']!=null){
                    $uploadImg=new UploadImg();
                    $uploadImg->imgFile=UploadedFile::getInstance($model,'thumbnail');
                    $uploadUrl=$uploadImg->upload();
                    if(!$uploadUrl){
                        header('Content-type:text/html;charset=utf-8');
                        die("图片上传出错");
                    }
                    $model->thumbnail=$uploadUrl;
                }
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
        $search=trim(Yii::$app->request->get('search'));
        if(!isset($search)){
            return $this->render('showproducts',['search'=>'']);
        }else{
            return $this->render('showproducts',['search'=>$search]);
        }
    }
    /**
     * 删除产品
     */
    public function actionDelete(){
        $params=Yii::$app->request->get();
        $deleteProduct=Products::findOne($params['id']);
        $deleteProduct->delete();
        return "删除成功";
    }
    /**
     * 产品详情
     */
    public function actionView(){
        $id=Yii::$app->request->get('id');
        $productDetial=Products::findOne($id);
        return $this->renderAjax('view',['model'=>$productDetial]);
    }
    /*
     * 编辑详情列表
     */
    public function actionUpdate(){
        $id=Yii::$app->request->get('id');
        $productDetial=Products::findOne($id);
        if($request=Yii::$app->request->post()){
            if($productDetial->load($request)){
                $productDetial->begin_time=strtotime($request['Products']['begin_time']);
                $productDetial->end_time=strtotime($request['Products']['end_time']);
                if($productDetial->validate()){
                    if($_FILES['Products']['name']['thumbnail']!=null){
                        $uploadImg=new UploadImg();
                        $uploadImg->imgFile=UploadedFile::getInstance($productDetial,'thumbnail');
                        $uploadUrl=$uploadImg->upload();
                        if(!$uploadUrl){
                            header('Content-type:text/html;charset=utf-8');
                            die("图片上传出错");
                        }
                        $productDetial->thumbnail=$uploadUrl;
                    }else{
                        unset($productDetial['thumbnail']);
                    }
                    $productDetial->save();
                    return $this->render('showproducts');
                }
            }
        }
        $productDetial['begin_time']=date('m/d/Y',$productDetial['begin_time']);
        $productDetial['end_time']=date('m/d/Y',$productDetial['end_time']);
        return $this->render('update',['model'=>$productDetial]);
    }



}
