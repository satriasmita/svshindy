<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property int $hotel_id
 * @property string $h_nama
 * @property string $h_alamat
 * @property string $h_telp
 * @property int $tahun
 * @property int $status
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
            [['h_alamat'], 'string'],
            [['tahun', 'status'], 'required'],
            [['tahun', 'status'], 'integer'],
            [['h_nama', 'foto', 'foto2', 'foto3', 'foto4', 'h_latitude', 'h_longitude'], 'string', 'max' => 255],
            [['h_telp'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'hotel_id' => 'Hotel ID',
            'h_nama' => 'H Nama',
            'h_alamat' => 'H Alamat',
            'h_telp' => 'H Telp',
            'tahun' => 'Tahun',
            'status' => 'Status',
            'foto' => 'Foto',
            'foto2' => 'Foto2',
            'foto3' => 'Foto3',
            'foto4' => 'Foto4',
            'h_latitude' => 'H Latitude',
            'h_longitude' => 'H Longitude',
        ];
    }

    public function getFasilitasHotels()
    {
        return $this->hasMany(FasilitasHotel::className(), ['fh_hotel' => 'hotel_id']);
    }

    public function getKamarHotels()
    {
        return $this->hasMany(KamarHotel::className(), ['kh_hotel' => 'hotel_id']);
    }
    public function getFasitiasKamar()
    {
        return $this->hasMany(FasilitasKamarHotel::className(), ['kh_id' => 'fkh_id']);
    }

    public function getDropdownHotel(){
        $carihotel = Hotel::find() 
                    // -> where(['status_ta'=>1])
                    -> all();
        $dropDown = \yii\helpers\ArrayHelper::map($carihotel,'hotel_id','h_nama');
        return $dropDown;
    }
}


// public function getDropdownSemester(){
//         $semester = MasterSemester::find() 
//                     // -> where(['status_ta'=>1])
//                     -> all();
//         $dropDown = \yii\helpers\ArrayHelper::map($semester,'id_semester','nama_semester');
//         return $dropDown;
//     }