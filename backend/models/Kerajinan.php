<?php

namespace backend\models;

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
            [['kerajinan_jenis', 'kerajinan_usaha', 'kerajinan_pemilik', 'kerajinan_alamat', 'kerajinan_keterangan','status','tahun'], 'string', 'max' => 255],
            [['kerajinan_telepon'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kerajinan_id' => 'ID',
            'kerajinan_jenis' => 'Jenis Kerajinan',
            'kerajinan_usaha' => 'Jenis Usaha',
            'kerajinan_pemilik' => 'Pemilik',
            'kerajinan_alamat' => 'Alamat',
            'kerajinan_telepon' => 'Telepon',
            'kerajinan_keterangan' => 'Keterangan',
            'status' => 'Status',
            'tahun' => 'Tahun',
        ];
    }
    public function getstatusLabel(){
        $return = [];
        if ($this->kerajinan_jenis == '1'){
            $return['kerajinan_jenis'] = 'KERAJINAN BERBASIS TEMPURUNG, KAYU DAN KERANG';
            $return['class'] = 'badge bg-yellow';
            $return['class_custom'] = '1';
        } else if ($this->kerajinan_jenis == '2') {
            $return['kerajinan_jenis'] = 'KERAJINAN SULAIMAN';
            $return['class'] = 'badge bg-blue';
            $return['class_custom'] = '2';           
        }else if ($this->kerajinan_jenis == '3') {
            $return['kerajinan_jenis'] = 'KERAJINAN RAJUTAN';
            $return['class'] = 'badge bg-red';
            $return['class_custom'] = '3';           
        }else if ($this->kerajinan_jenis == '4') {
            $return['kerajinan_jenis'] = 'MAKANAN';
            $return['class'] = 'badge bg-green';
            $return['class_custom'] = '4';           
        }
        return $return;   
    }
}
