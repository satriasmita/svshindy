<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "destinasi_wisata".
 *
 * @property int $id_destinasi
 * @property string $nama_destinasi
 * @property string $detail
 * @property string $latitude
 * @property string $longitude
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
            [['detail'], 'required'],
            [['detail','keunggulan','fasilitas'], 'string'],
            [['nama_destinasi', 'longitude', 'latitude', 'foto', 'foto2', 'foto3', 'foto4'], 'string', 'max' => 255],
            [['alamat', 'tahun', 'status'], 'string'],
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
    public function getstatusLabel(){
        $return = [];
        if ($this->status == '1'){
            $return['status'] = 'Publish';
            $return['class'] = 'badge bg-green';
            $return['class_custom'] = '1';
        } else if ($this->status == '2') {
            $return['status'] = 'Tidak Publish';
            $return['class'] = 'badge bg-red';
            $return['class_custom'] = '2';           
        }

        return $return;   
    }
}
