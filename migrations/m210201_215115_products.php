<?php

use yii\db\Migration;

/**
 * Class m210201_215115_products
 */
class m210201_215115_products extends Migration
{
    public function up()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'img' => $this->string()->notNull(),
            'date' => $this->dateTime(),
            'user_name' => $this->string(255)->notNull(),
            'reviews_count' => $this->integer()->defaultValue(0),

        ]);

        $this->createIndex(
            'idx-products-name',
            'products',
            'name'
        );

        $this->createIndex(
            'idx-products-img',
            'products',
            'img'
        );

        $this->createIndex(
            'idx-products-date',
            'products',
            'date'
        );

        $this->createIndex(
            'idx-products-user_name',
            'products',
            'user_name'
        );

        $this->createIndex(
            'idx-products-reviews_count',
            'products',
            'reviews_count'
        );
    }

    public function down()
    {
        $this->dropIndex(
            'idx-products-name',
            'products'
        );

        $this->dropIndex(
            'idx-products-img',
            'products'
        );

        $this->dropIndex(
            'idx-products-date',
            'products'
        );

        $this->dropIndex(
            'idx-products-user_name',
            'products'
        );

        $this->dropIndex(
            'idx-products-reviews_count',
            'products'
        );

        $this->dropTable('news');
    }
}
