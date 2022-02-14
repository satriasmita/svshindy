<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
use yii\imagine\Image;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "tb_berita".
 *
 * @property int $berita_id
 * @property string $berita_foto
 * @property string $berita_judul
 * @property string $berita_isi
 * @property string $berita_tanggal
 * @property int $berita_status
 */
class Berita extends \yii\db\ActiveRecord
{
    public $image;
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_berita';
    }

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'berita_judul',
                // 'slugAttribute' => 'slug',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['berita_foto', 'berita_judul', 'berita_isi', 'berita_status'], 'required'],
            [['berita_foto', 'berita_judul', 'berita_isi','slug'], 'string'],
            [['berita_tanggal'], 'safe'],
            [['berita_status','berita_hit'], 'integer'],
            [['image'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg,','checkExtensionByMimeType'=>false, 'maxSize' => 2048000, 'tooBig' => 'Ukuran Maksimal 2MB'],
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
            'berita_hit' => 'Hit',
            'slug' => 'Slug',
            'berita_status' => 'Berita Status',
        ];
    }

    public function upload()
    {
        // $today = date('Y-m-d-H-i-s');

        if ($this->validate()) {
            $imgFile = $this->image->tempName;
            $imgName = strtotime("now").'-thumb-'.$this->image->baseName . '.' . $this->image->extension;
            // Image::thumbnail($imgFile, 1520, 900)
            Image::thumbnail($imgFile, 570, 320)->save(Yii::getAlias('@webroot/images/Berita/'.$imgName), ['quality' => 85]);
            $this->berita_foto = $imgName;
            $fileName = strtotime("now").'-'.$this->image->baseName . '.' . $this->image->extension;
            $this->berita_foto = $fileName;
            $upload = $this->image->saveAs( Yii::getAlias('@webroot/images/Berita/') . $fileName);
            return $upload;
        } else {
            return false;
        }
    }

    public function tanggalIndo($tanggal, $cetak_hari = true)
    {
        $array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
        $hari = $array_hari[date('N',strtotime($tanggal))];

        //FORMAT TANGGAL
        $tgl = date ('j', strtotime($tanggal));

        //ARRAY BULAN
        $array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
        $bulan = $array_bulan[date('n', strtotime($tanggal))];

        //FORMAT TAHUN
        $tahun = date('Y', strtotime($tanggal));

        $jam = date('H:i:s', strtotime($tanggal));

        //MENAMPILKAN HARI DAN TANGGAL
        $tgl_indo =$hari . ', ' . $tgl . ' '. $bulan . ' '. $tahun;

        if ($tanggal) {
            return $tgl_indo;
        } else{
            return 'Tidak Diset';
        }
    }
}
