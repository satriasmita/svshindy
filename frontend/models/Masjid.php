<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_masjid".
 *
 * @property int $m_id
 * @property string $m_nama
 * @property string $m_alamat
 * @property string $m_latitude
 * @property string $m_longitude
 * @property int $tahun
 * @property int $status
 */
class Masjid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_masjid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['m_nama', 'm_alamat', 'm_latitude', 'm_longitude', 'tahun', 'status'], 'required'],
            [['m_alamat'], 'string'],
            [['tahun', 'status'], 'integer'],
            [['m_nama', 'm_latitude', 'm_longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'm_id' => 'M ID',
            'm_nama' => 'M Nama',
            'm_alamat' => 'M Alamat',
            'm_latitude' => 'M Latitude',
            'm_longitude' => 'M Longitude',
            'tahun' => 'Tahun',
            'status' => 'Status',
        ];
    }
}
