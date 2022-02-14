<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kuliner".
 *
 * @property int $id_kuliner
 * @property string $nama
 * @property string $foto
 * @property string $keterangan
 * @property int $tahun
 * @property int $status
 */
class Kuliner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuliner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keterangan', 'tahun', 'status'], 'required'],
            [['keterangan'], 'string'],
            [['tahun', 'status'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kuliner' => 'Id Kuliner',
            'nama' => 'Nama',
            'foto' => 'Foto',
            'keterangan' => 'Keterangan',
            'tahun' => 'Tahun',
            'status' => 'Status',
        ];
    }
}
