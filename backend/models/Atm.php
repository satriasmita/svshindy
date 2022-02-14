<?php

namespace backend\models;

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
            [['atm_nama', 'atm_nama_bank', 'atm_alamat', 'atm_latitude', 'atm_longitude'], 'required'],
            [['atm_alamat'], 'string'],
            [['status','tahun'], 'integer'],
            [['atm_nama', 'atm_nama_bank', 'atm_latitude', 'atm_longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'atm_id' => 'ID',
            'atm_nama' => 'Nama ATM',
            'atm_nama_bank' => 'Nama Bank',
            'atm_alamat' => 'Alamat',
            'atm_latitude' => 'Latitude',
            'atm_longitude' => 'Longitude',
            'status' => 'Status',
            'tahun' => 'Tahun',
        ];
    }
}
