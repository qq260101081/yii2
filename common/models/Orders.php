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
            ['price', 'number'],
            [['address', 'name'], 'string'],
            [['create_time','pay_time'], 'string'],
        ];
    }

}
