<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_berita".
 *
 * @property int $berita_id
 * @property string $berita_foto
 * @property string $berita_judul
 * @property string $berita_isi
 * @property string $berita_tanggal
 * @property int $berita_hit
 * @property string $slug
 * @property int $berita_status
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['berita_foto', 'berita_judul', 'berita_isi', 'berita_status'], 'required'],
            [['berita_foto', 'berita_judul', 'berita_isi'], 'string'],
            [['berita_tanggal'], 'safe'],
            [['berita_hit', 'berita_status'], 'integer'],
            [['slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'berita_id' => 'Berita ID',
            'berita_foto' => 'Berita Foto',
            'berita_judul' => 'Berita Judul',
            'berita_isi' => 'Berita Isi',
            'berita_tanggal' => 'Berita Tanggal',
            'berita_hit' => 'Berita Hit',
            'slug' => 'Slug',
            'berita_status' => 'Berita Status',
        ];
    }
}
