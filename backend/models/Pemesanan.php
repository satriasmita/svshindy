<?php

namespace backend\models;

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
}
