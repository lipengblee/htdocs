<?php
namespace backend\models;

use Yii;
use yii\base\Model;



class UploadImg extends Model
{
    public $imgFile;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imgFile'],'file','skipOnEmpty'=>false,'extensions'=>'jpg,png,jpeg'],
        ];
    }

    public function upload(){
        if($this->validate()){
            $baseURL='../../uploads/thumbnail/';
            $ymURL=date('Ym',time());
            $dURL=date('d',time());
            if(!file_exists($baseURL.$ymURL)){
                mkdir($baseURL.$ymURL,0777,true);
                chmod($baseURL.$ymURL,0777);
            }
            if(!file_exists($baseURL.$ymURL.'/'.$dURL)){
                mkdir($baseURL.$ymURL.'/'.$dURL,0777,true);
                chmod($baseURL.$ymURL.'/'.$dURL,0777);
            }
            $imgName=time();
            $this->imgFile->saveAs($baseURL.$ymURL.'/'.$dURL.'/'.$imgName.'.'.$this->imgFile->extension);
            return $baseURL.$ymURL.'/'.$dURL.'/'.$imgName.'.'.$this->imgFile->extension;
        }else{
            return false;
        }
    }


}
