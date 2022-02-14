<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategori_bed".
 *
 * @property int $id_bed
 * @property string $nama_bed
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


    public function getNamaBed()
    {
     return (($this->nama_bed) ? : '');
    }


       public function getKamarbed()
    {
        return $this->hasOne(KamarHotel::className(), ['kh_jenis_bed' => 'id_bed']);
    }
}
