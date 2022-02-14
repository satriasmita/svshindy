<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "map".
 *
 * @property int $idmap
 * @property string $latitude
 * @property string $longtitude
 * @property string $alamat
 * @property string $npsn
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 */
class Map extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['latitude', 'longtitude', 'alamat', 'npsn', 'image'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['latitude', 'longtitude'], 'string', 'max' => 45],
            [['alamat', 'image'], 'string', 'max' => 100],
            [['npsn'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idmap' => Yii::t('app', 'Idmap'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longtitude' => Yii::t('app', 'Longtitude'),
            'alamat' => Yii::t('app', 'Alamat'),
            'npsn' => Yii::t('app', 'Npsn'),
            'image' => Yii::t('app', 'Image'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
