<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $category
 * @property string $created_date
 * @property string $update_date
 * @property string $status
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'category', 'created_date', 'update_date', 'status'], 'required'],
            [['content'], 'string'],
            [['created_date', 'update_date'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['category', 'status'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'category' => 'Category',
            'created_date' => 'Created Date',
            'update_date' => 'Update Date',
            'status' => 'Status',
        ];
    }
}
