<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "restoran".
 *
 * @property int $restoran_id
 * @property string $restoran_nama
 * @property string $restoran_alamat
 * @property string $restoran_telepon
 * @property string $restoran_detail
 * @property string $restoran_photo
 * @property string $restoran_pemilik
 * @property string $restoran_latitude
 * @property string $restoran_longitude
 * @property int $tahun
 * @property int $status
 */
class Restoran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'restoran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['restoran_alamat', 'restoran_detail'], 'string'],
            [['tahun', 'status'], 'required'],
            [['tahun', 'status'], 'integer'],
            [['restoran_nama', 'restoran_telepon', 'restoran_pemilik'], 'string', 'max' => 50],
            [['restoran_photo', 'restoran_latitude', 'restoran_longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'restoran_id' => 'Restoran ID',
            'restoran_nama' => 'Restoran Nama',
            'restoran_alamat' => 'Restoran Alamat',
            'restoran_telepon' => 'Restoran Telepon',
            'restoran_detail' => 'Restoran Detail',
            'restoran_photo' => 'Restoran Photo',
            'restoran_pemilik' => 'Restoran Pemilik',
            'restoran_latitude' => 'Restoran Latitude',
            'restoran_longitude' => 'Restoran Longitude',
            'tahun' => 'Tahun',
            'status' => 'Status',
        ];
    }
}
