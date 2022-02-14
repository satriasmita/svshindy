<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_spbu".
 *
 * @property int $spbu_id
 * @property string $spbu_nama
 * @property string $spbu_alamat
 * @property string $spbu_latitude
 * @property string $spbu_longitude
 */
class Spbu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_spbu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['spbu_nama', 'spbu_alamat', 'spbu_latitude', 'spbu_longitude'], 'required'],
            [['spbu_nama', 'spbu_alamat', 'spbu_latitude', 'spbu_longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'spbu_id' => 'ID',
            'spbu_nama' => 'Nama SPBU',
            'spbu_alamat' => 'Alamat',
            'spbu_latitude' => 'Latitude',
            'spbu_longitude' => 'Longitude',
        ];
    }
}
