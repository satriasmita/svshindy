<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_akses".
 *
 * @property int $akses_id
 * @property string $akses_destinasi
 * @property string $akses_transportasi
 * @property string $akses_distance
 */
class Akses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_akses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['akses_destinasi', 'akses_transportasi', 'akses_distance'], 'required'],
            [['akses_destinasi', 'akses_transportasi', 'akses_distance'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'akses_id' => 'Akses ID',
            'akses_destinasi' => 'Akses Destinasi',
            'akses_transportasi' => 'Akses Transportasi',
            'akses_distance' => 'Akses Distance',
        ];
    }
}
