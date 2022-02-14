<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "destinasi_wisata".
 *
 * @property int $id_destinasi
 * @property string $nama_destinasi
 * @property string $detail
 * @property string $alamat
 * @property string $latitude
 * @property string $longitude
 * @property int $tahun
 * @property int $status
 * @property string $foto
 * @property string $foto2
 * @property string $foto3
 * @property string $foto4
 */
class DestinasiWisata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'destinasi_wisata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['detail', 'alamat', 'tahun', 'status'], 'required'],
            [['detail', 'alamat','keunggulan','fasilitas'], 'string'],
            [['tahun', 'status'], 'integer'],
            [['nama_destinasi', 'latitude', 'longitude', 'foto', 'foto2', 'foto3', 'foto4'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_destinasi' => 'Id Destinasi',
            'nama_destinasi' => 'Nama Destinasi',
            'detail' => 'Detail',
            'keunggulan' => 'Keunggulan',
            'fasilitas' => 'Fasilitas',
            'alamat' => 'Alamat',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'tahun' => 'Tahun',
            'status' => 'Status',
            'foto' => 'Foto',
            'foto2' => 'Foto2',
            'foto3' => 'Foto3',
            'foto4' => 'Foto4',
        ];
    }
}
