<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "login".
 *
 * @property int $login_id
 * @property int $id_user
 * @property int $id_KAB
 * @property int $id_KEC
 *
 * @property User $user
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_KAB', 'id_KEC'], 'integer'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'login_id' => 'Login ID',
            'id_user' => 'Id User',
            'id_KAB' => 'Nama Kota',
            'id_KEC' => 'Nama  Kecamatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatan()
    {
        return $this->hasOne(Kecamatan::className(), ['kecamatan_id' => 'id_KEC']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKota()
    {
        return $this->hasOne(Kota::className(), ['kota_id' => 'id_KAB']);
    }
}
