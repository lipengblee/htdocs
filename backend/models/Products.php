<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%products}}".
 *
 * @property integer $product_id
 * @property string $product_name
 * @property string $product_description
 * @property integer $begin_time
 * @property integer $end_time
 * @property string $product_detail
 * @property integer $create_time
 * @property integer $update_time
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%products}}';
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'product_description', 'begin_time', 'end_time','contact'], 'required', 'message'=>'不能为空'],
            ['product_name','unique','message'=>'存在相同标题'],
            [['product_description', 'product_detail'], 'string'],
            [['begin_time','end_time'],'safe'],
            ['end_time','compare','compareAttribute'=>'begin_time','operator'=>'>','message'=>'结束时间必须大于开始时间'],
            [['product_name'], 'string', 'max' => 50,'message'=>'内容不得超过50字'],
            [['contact'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => '产品ID',
            'product_name' => '名称',
            'product_description' => '描述',
            'begin_time' => '开始时间',
            'end_time' => '结束时间',
            'product_detail' => '产品详情',
            'contact' => '联系方式',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
