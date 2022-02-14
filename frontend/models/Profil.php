<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "profil".
 *
 * @property int $prof_id
 * @property string $prof_judul
 * @property string $prof_gambar
 * @property string $prof_isi
 * @property string $slug
 * @property int $prof_status
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
            [['prof_judul'], 'required'],
            [['prof_isi'], 'string'],
            [['prof_status'], 'integer'],
            [['prof_judul', 'prof_gambar', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prof_id' => 'Prof ID',
            'prof_judul' => 'Prof Judul',
            'prof_gambar' => 'Prof Gambar',
            'prof_isi' => 'Prof Isi',
            'slug' => 'Slug',
            'prof_status' => 'Prof Status',
        ];
    }
}
