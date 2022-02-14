<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_spbu".
 *
 * @property int $spbu_id
 * @property string $spbu_nama
 * @property string $spbu_alamat
 * @property string $spbu_latitude
 * @property string $spbu_longitude
 * @property int $tahun
 * @property int $status
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
            [['spbu_nama', 'spbu_alamat', 'spbu_latitude', 'spbu_longitude', 'tahun', 'status'], 'required'],
            [['tahun', 'status'], 'integer'],
            [['spbu_nama', 'spbu_alamat', 'spbu_latitude', 'spbu_longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'spbu_id' => 'Spbu ID',
            'spbu_nama' => 'Spbu Nama',
            'spbu_alamat' => 'Spbu Alamat',
            'spbu_latitude' => 'Spbu Latitude',
            'spbu_longitude' => 'Spbu Longitude',
            'tahun' => 'Tahun',
            'status' => 'Status',
        ];
    }
}
