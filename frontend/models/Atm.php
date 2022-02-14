<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_atm".
 *
 * @property int $atm_id
 * @property string $atm_nama
 * @property string $atm_nama_bank
 * @property string $atm_alamat
 * @property string $atm_latitude
 * @property string $atm_longitude
 * @property int $tahun
 * @property int $status
 */
class Atm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_atm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['atm_nama', 'atm_nama_bank', 'atm_alamat', 'atm_latitude', 'atm_longitude', 'tahun', 'status'], 'required'],
            [['atm_alamat'], 'string'],
            [['tahun', 'status'], 'integer'],
            [['atm_nama', 'atm_nama_bank', 'atm_latitude', 'atm_longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'atm_id' => 'Atm ID',
            'atm_nama' => 'Atm Nama',
            'atm_nama_bank' => 'Atm Nama Bank',
            'atm_alamat' => 'Atm Alamat',
            'atm_latitude' => 'Atm Latitude',
            'atm_longitude' => 'Atm Longitude',
            'tahun' => 'Tahun',
            'status' => 'Status',
        ];
    }
}
