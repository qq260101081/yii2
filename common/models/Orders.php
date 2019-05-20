<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;


class Orders extends ActiveRecord
{

    public static function tableName()
    {
        return '{{%orders}}';
    }

    public function rules()
    {
        return [
            ['number', 'integer'],
        ];
    }

}
