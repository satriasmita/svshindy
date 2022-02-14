<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori_bed".
 *
 * @property int $id_bed
 * @property string $nama_bed
 *
 * @property KamarHotel[] $kamarHotels
 */
class KategoriBed extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_bed';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_bed'], 'required'],
            [['nama_bed'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bed' => 'Id Bed',
            'nama_bed' => 'Nama Bed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKamarHotels()
    {
        return $this->hasMany(KamarHotel::className(), ['kh_jenis_bed' => 'id_bed']);
    }
}
