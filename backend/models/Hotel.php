<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property int $hotel_id
 * @property string $h_nama
 * @property string $h_alamat
 * @property string $h_telp
 * @property string $foto
 * @property string $foto2
 * @property string $foto3
 * @property string $foto4
 * @property string $h_latitude
 * @property string $h_longitude
 */
class Hotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['h_alamat','status','tahun'], 'string'],
            [['h_nama', 'foto', 'foto2', 'foto3', 'foto4', 'h_longitude', 'h_latitude'], 'string', 'max' => 255],
            [['h_telp'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'hotel_id' => 'ID Hotel',
            'h_nama' => 'Nama Hotel',
            'h_alamat' => 'Alamat',
            'h_telp' => 'Telp',
            'foto' => 'Photo',
            'foto2' => 'Photo',
            'foto3' => 'Photo',
            'foto4' => 'Photo',
            'h_latitude' => 'Latitude',
            'h_longitude' => 'Longitude',
            'tahun' => 'Tahun',
            'status' => 'Status',
        ];
    }

    
}
