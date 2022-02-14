<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fasilitas_hotel".
 *
 * @property int $fh_id
 * @property int $fh_hotel
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
            [['fh_hotel', 'fh_ac', 'fh_kolam_renang', 'fh_tempat_parkir', 'fh_wifi', 'fh_restorant', 'fh_resepsionis'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fh_id' => 'Fh ID',
            'fh_hotel' => 'Fh Hotel',
            'fh_ac' => 'Fh Ac',
            'fh_kolam_renang' => 'Fh Kolam Renang',
            'fh_tempat_parkir' => 'Fh Tempat Parkir',
            'fh_wifi' => 'Fh Wifi',
            'fh_restorant' => 'Fh Restorant',
            'fh_resepsionis' => 'Fh Resepsionis',
        ];
    }
}
