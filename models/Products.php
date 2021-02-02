<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $img
 * @property string $price 
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
            [['name', 'img', 'price', 'user_name'], 'required'],
            [['date'], 'safe'],
            [['reviews_count'], 'integer'],
            [['name', 'img', 'user_name'], 'string', 'max' => 255],
            [['price'], 'string', 'max' => 50], 
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'img' => 'Изображение',
            'price' => 'Цена',
            'date' => 'Дата',
            'user_name' => 'Имя добавившего',
            'reviews_count' => 'Количество отзывов',
        ];
    }
}
