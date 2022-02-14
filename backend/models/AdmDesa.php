<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "adm_desa".
 *
 * @property int $adm_desa_id
 * @property int $id_user
 * @property int $id_KAB
 * @property int $id_KEC
 * @property int $id_KEL
 *
 * @property User $user
 */
class AdmDesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adm_desa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_KAB', 'id_KEC', 'id_KEL'], 'integer'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adm_desa_id' => 'Adm Desa ID',
            'id_user' => 'Id User',
            'id_KAB' => 'Id  Kab',
            'id_KAB' => 'Id  Kec',
            'id_KEL' => 'Id  Kel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
    public function getKel()
    {
        return $this->hasOne(Desa::className(), ['desa_id' => 'id_KEL']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKec()
    {
        return $this->hasOne(Kecamatan::className(), ['kecamatan_id' => 'id_KAB']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKab()
    {
        return $this->hasOne(Kota::className(), ['kota_id' => 'id_KAB']);
    }

}
