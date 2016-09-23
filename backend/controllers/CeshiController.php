<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\UploadImg;
use yii\web\UploadedFile;

class CeshiController extends Controller
{
    public function actionUpload()
    {
        $model = new UploadImg();

        if (Yii::$app->request->isPost) {
            $model->imgFile = UploadedFile::getInstance($model, 'imgFile');
            if ($model->upload()) {
                // 文件上传成功
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
}