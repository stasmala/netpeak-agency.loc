<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $img
 * @property string|null $date
 * @property string $user_name
 * @property int|null $reviews_count
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'img', 'user_name'], 'required'],
            [['date'], 'safe'],
            [['reviews_count'], 'integer'],
            [['name', 'img', 'user_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'img' => 'Img',
            'date' => 'Date',
            'user_name' => 'User Name',
            'reviews_count' => 'Reviews Count',
        ];
    }
}
