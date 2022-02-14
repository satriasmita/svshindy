<?php

namespace frontend\models;

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
            [['kh_id', 'fkh_balkon', 'fkh_coffe_maker', 'fkh_ac', 'fkh_hot_water', 'fkh_wifi', 'fkh_sarapan', 'fkh_shower', 'fkh_tv', 'fkh_kulkas'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fkh_id' => 'Fkh ID',
            'kh_id' => 'Kh ID',
            'fkh_balkon' => 'Fkh Balkon',
            'fkh_coffe_maker' => 'Fkh Coffe Maker',
            'fkh_ac' => 'Fkh Ac',
            'fkh_hot_water' => 'Fkh Hot Water',
            'fkh_wifi' => 'Fkh Wifi',
            'fkh_sarapan' => 'Fkh Sarapan',
            'fkh_shower' => 'Fkh Shower',
            'fkh_tv' => 'Fkh Tv',
            'fkh_kulkas' => 'Fkh Kulkas',
        ];
    }
}
