<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_pemesanan".
 *
 * @property int $pemesanan_id
 * @property int $pemesanan_hotel_id
 * @property string $pemesanan_checkin
 * @property string $pemesanan_durasi
 * @property int $pemesanan_tamu_dewasa
 * @property int $pemesanan_tamu_anak
 * @property int $pemesanan_jumlah_kamar
 * @property double $pemesanan_total
 * @property string $pemesanan_nama
 * @property string $pemesanan_notelp
 * @property string $pemesanan_email
 * @property int $pemesanan_status
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pemesanan_hotel_id', 'pemesanan_tamu_dewasa', 'pemesanan_tamu_anak', 'pemesanan_jumlah_kamar', 'pemesanan_status'], 'integer'],
            [['pemesanan_checkin'], 'safe'],
            [['pemesanan_total'], 'number'],
            [['pemesanan_durasi', 'pemesanan_notelp', 'pemesanan_email'], 'string', 'max' => 50],
            [['pemesanan_nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pemesanan_id' => 'Pemesanan ID',
            'pemesanan_hotel_id' => 'Pemesanan Hotel ID',
            'pemesanan_checkin' => 'Pemesanan Checkin',
            'pemesanan_durasi' => 'Pemesanan Durasi',
            'pemesanan_tamu_dewasa' => 'Pemesanan Tamu Dewasa',
            'pemesanan_tamu_anak' => 'Pemesanan Tamu Anak',
            'pemesanan_jumlah_kamar' => 'Pemesanan Jumlah Kamar',
            'pemesanan_total' => 'Pemesanan Total',
            'pemesanan_nama' => 'Pemesanan Nama',
            'pemesanan_notelp' => 'Pemesanan Notelp',
            'pemesanan_email' => 'Pemesanan Email',
            'pemesanan_status' => 'Pemesanan Status',
        ];
    }

    public function getHotel()
    {
        return $this->hasOne(Hotel::className(), ['hotel_id' => 'pemesanan_hotel_id']);
    }
    public function getKamarHotel()
    {
        return $this->hasMany(KamarHotel::className(), ['kh_hotel' => 'hotel_id']);
    }
    public function getFasilitas()
    {
        return $this->hasMany(FasilitasKamarHotel::className(), ['kh_id' => 'fkh_id']);
    }

    // public function getAll()
    // {
    //     $get = KamarHotel::find()->all();
    //     $result = ArrayHelper::map($get, 'kh_id', 'kh_nama');
    //     return $result;
    // }

    public function getKategoriKamar()
    {
        return $this->hasOne(KategoriKamar::className(), ['id_kamar' => 'kh_nama']);
    }
    public function getKategoriBed()
    {
        return $this->hasOne(KategoriBed::className(), ['kh_jenis_bed' => 'nama_bed']);
    }
    public function getCariKamar(){
        return $this->hasOne(KamarHotel::className(), ['hotel_id' => 'kh_hotel']);
    }
    public function getHargaKamar()
    {
        return $this->hasOne(Hotel::className(), ['hotel_id' => 'kh_hotel']);
    }
    public function getHotelKamar(){
        return $this->hasOne(KamarHotel::className(), ['kh_id' => 'pemesanan_hotel_id']);
    }
}
