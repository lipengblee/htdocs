<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


class UploadImg extends Model
{
    public $file;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file'],'file'],
        ];
    }

}
