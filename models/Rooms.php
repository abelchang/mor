<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%rooms}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $price
 */
class Rooms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%rooms}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['price'], 'integer'],
            [['name'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
        ];
    }

    /**
     * @inheritdoc
     * @return RoomsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RoomsQuery(get_called_class());
    }
}
