<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fasilitas_kamar_hotel".
 *
 * @property int $fkh_id
 * @property int $kh_id
 * @property int $fkh_balkon
 * @property int $fkh_coffe_maker
 * @property int $fkh_ac
 * @property int $fkh_hot_water
 * @property int $fkh_wifi
 * @property int $fkh_sarapan
 * @property int $fkh_shower
 * @property int $fkh_tv
 * @property int $fkh_kulkas
 */
class FasilitasKamarHotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fasilitas_kamar_hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kh_id', 'fkh_kategori_kamar', 'fkh_balkon', 'fkh_coffe_maker', 'fkh_ac', 'fkh_hot_water', 'fkh_wifi', 'fkh_sarapan', 'fkh_shower', 'fkh_tv', 'fkh_kulkas'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fkh_id' => 'ID',
            'kh_id' => 'Nama Hotel',
            'fkh_kategori_kamar' => 'Jenis Kamar', 
            'fkh_balkon' => 'Balkon',
            'fkh_coffe_maker' => 'Coffe Maker',
            'fkh_ac' => 'AC',
            'fkh_hot_water' => 'Hot Water',
            'fkh_wifi' => 'Wifi',
            'fkh_sarapan' => 'Sarapan',
            'fkh_shower' => 'Shower',
            'fkh_tv' => 'TV',
            'fkh_kulkas' => 'Kulkas',
        ];
    }

    public function getHotel()
    {
        return $this->hasOne(Hotel::className(), ['hotel_id' => 'kh_id']);
    }
    public function getKatkamar()
    {
        return $this->hasOne(KategoriKamar::className(), ['id_kamar' => 'fkh_kategori_kamar']);
    }
}
