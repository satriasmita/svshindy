<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "manual".
 *
 * @property int $manual_id
 * @property string $manual_title
 * @property string $manual_file
 */
class Manual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'manual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manual_title'], 'string', 'max' => 100],
            [['manual_file'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'manual_id' => 'Manual ID',
            'manual_title' => 'Manual Title',
            'manual_file' => 'Manual File',
        ];
    }
}
