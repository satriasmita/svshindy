<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_rs".
 *
 * @property int $rs_id
 * @property string $rs_nama
 * @property string $rs_alamat
 * @property string $rs_latitude
 * @property string $rs_longitude
 */
class Rs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_rs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rs_nama', 'rs_alamat', 'rs_latitude', 'rs_longitude'], 'required'],
            [['rs_nama', 'rs_alamat'], 'string'],
            [['rs_status'], 'integer'],
            [['rs_latitude', 'rs_longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rs_id' => 'ID',
            'rs_nama' => 'Nama Rumah Sakit',
            'rs_alamat' => 'Alamat',
            'rs_latitude' => 'Latitude',
            'rs_longitude' => 'Longitude',
            'rs_status' => 'Staus',
        ];
    }
}
