<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "setting_kop".
 *
 * @property int $kop_id
 * @property string $nama_kecamatan
 * @property string $nama_desa
 * @property string $alamat_
 * @property string $kode_pos
 * @property string $index_surat
 * @property int $desa
 */
class Profil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desa'], 'integer'],
            [['nama_kecamatan', 'nama_desa', 'alamat_', 'kode_pos'], 'string', 'max' => 128],
            [['index_surat'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kop_id' => Yii::t('app', 'Kop ID'),
            'nama_kecamatan' => Yii::t('app', 'Nama Kecamatan'),
            'nama_desa' => Yii::t('app', 'Nama Desa'),
            'alamat_' => Yii::t('app', 'Alamat'),
            'kode_pos' => Yii::t('app', 'Kode Pos'),
            'index_surat' => Yii::t('app', 'Index Surat'),
            'desa' => Yii::t('app', 'Desa'),
        ];
    }
}
