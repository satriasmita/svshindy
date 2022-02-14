<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_parkir".
 *
 * @property int $p_id
 * @property string $p_nama
 * @property string $p_alamat
 * @property string $p_latitude
 * @property string $p_longitude
 */
class Parkir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_parkir';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['p_nama', 'p_alamat', 'p_latitude', 'p_longitude'], 'required'],
            [['p_alamat'], 'string'],
            [['p_nama', 'p_latitude', 'p_longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'p_nama' => 'P Nama',
            'p_alamat' => 'P Alamat',
            'p_latitude' => 'P Latitude',
            'p_longitude' => 'P Longitude',
        ];
    }
}
