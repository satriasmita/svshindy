<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategori_kamar".
 *
 * @property int $id_kamar
 * @property string $nama_kamaar
 */
class KategoriKamar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_kamar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kamaar'], 'required'],
            [['nama_kamaar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kamar' => 'Id Kamar',
            'nama_kamaar' => 'Nama Kamaar',
        ];
    }
}
