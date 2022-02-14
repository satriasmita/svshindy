<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kerajinan".
 *
 * @property int $kerajinan_id
 * @property string $kerajinan_jenis
 * @property string $kerajinan_usaha
 * @property string $kerajinan_pemilik
 * @property string $kerajinan_alamat
 * @property string $kerajinan_telepon
 * @property string $kerajinan_keterangan
 * @property int $tahun
 * @property int $status
 */
class Kerajinan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kerajinan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun', 'status'], 'required'],
            [['tahun', 'status'], 'integer'],
            [['kerajinan_jenis', 'kerajinan_usaha', 'kerajinan_pemilik', 'kerajinan_alamat', 'kerajinan_keterangan'], 'string', 'max' => 255],
            [['kerajinan_telepon'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kerajinan_id' => 'Kerajinan ID',
            'kerajinan_jenis' => 'Kerajinan Jenis',
            'kerajinan_usaha' => 'Kerajinan Usaha',
            'kerajinan_pemilik' => 'Kerajinan Pemilik',
            'kerajinan_alamat' => 'Kerajinan Alamat',
            'kerajinan_telepon' => 'Kerajinan Telepon',
            'kerajinan_keterangan' => 'Kerajinan Keterangan',
            'tahun' => 'Tahun',
            'status' => 'Status',
        ];
    }
}
