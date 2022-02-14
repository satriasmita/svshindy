<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fasilitas_hotel".
 *
 * @property int $fh_id
 * @property int $hotel
 * @property int $fh_ac
 * @property int $fh_kolam_renang
 * @property int $fh_tempat_parkir
 * @property int $fh_wifi
 * @property int $fh_restorant
 * @property int $fh_resepsionis
 */
class FasilitasHotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fasilitas_hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fh_hotel', 'fh_ac', 'fh_kolam_renang', 'fh_tempat_parkir', 'fh_wifi', 'fh_restorant', 'fh_resepsionis','fh_transportasi'], 'integer'],
           
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fh_id' => 'ID Fasilitas Hotel',
            'fh_hotel' => 'Nama Hotel',
            'fh_ac' => 'AC',
            'fh_kolam_renang' => 'Kolam Renang',
            'fh_tempat_parkir' => 'Tempat Parkir',
            'fh_wifi' => 'Wifi',
            'fh_restorant' => 'Restorant',
            'fh_resepsionis' => 'Resepsionis 24 jam',
            'fh_transportasi' => 'Transportasi / Taxi',
        ];
    }

    public function getHotel()
    {
        return $this->hasOne(Hotel::className(), ['hotel_id' => 'fh_hotel']);
    }
}
