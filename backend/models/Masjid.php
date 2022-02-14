<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_masjid".
 *
 * @property int $m_id
 * @property string $m_nama
 * @property string $m_alamat
 * @property string $m_latitude
 * @property string $m_longitude
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
            [['m_nama', 'm_alamat', 'm_latitude', 'm_longitude'], 'required'],
            [['m_alamat'], 'string'],
            [['status','tahun'], 'integer'],
            [['m_nama', 'm_latitude', 'm_longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'm_id' => 'ID',
            'm_nama' => 'Nama Masjid',
            'm_alamat' => 'Alamat',
            'm_latitude' => 'Latitude',
            'm_longitude' => 'Longitude',
            'status' => 'Status',
            'tahun' => 'Tahun',
     
        ];
    }
}
