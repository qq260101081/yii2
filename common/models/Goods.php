<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;


class Goods extends ActiveRecord
{

    public static function tableName()
    {
        return '{{%goods}}';
    }

    public function rules()
    {
        return [
            ['number', 'integer'],
        ];
    }

}
