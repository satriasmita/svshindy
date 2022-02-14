<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kamar_hotel".
 *
 * @property int $kh_id
 * @property int $kh_hotel
 * @property string $kh_nama
 * @property string $kh_luas_kamar
 * @property int $kh_jenis_bed
 * @property int $kh_harga
 * @property int $kh_sisa_kamar
 * @property int $kh_jumlah_tamu
 *
 * @property KategoriBed $khJenisBed
 */
class KamarHotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kamar_hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kh_hotel', 'kh_jenis_bed', 'kh_harga', 'kh_sisa_kamar', 'kh_jumlah_tamu'], 'integer'],
            [['kh_nama', 'kh_luas_kamar'], 'string', 'max' => 255],
            [['kh_jenis_bed'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriBed::className(), 'targetAttribute' => ['kh_jenis_bed' => 'id_bed']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kh_id' => 'Kh ID',
            'kh_hotel' => 'Kh Hotel',
            'kh_nama' => 'Kh Nama',
            'kh_luas_kamar' => 'Kh Luas Kamar',
            'kh_jenis_bed' => 'Kh Jenis Bed',
            'kh_harga' => 'Kh Harga',
            'kh_sisa_kamar' => 'Kh Sisa Kamar',
            'kh_jumlah_tamu' => 'Kh Jumlah Tamu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhJenisBed()
    {
        return $this->hasOne(KategoriBed::className(), ['id_bed' => 'kh_jenis_bed']);
    }
    public function getNmKamar()
    {
        return $this->hasOne(KategoriKamar::className(), ['id_kamar' => 'kh_nama']);
    }
}