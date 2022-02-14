<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
use yii\imagine\Image;
use yii\behaviors\SluggableBehavior;
/**
 * This is the model class for table "kuliner".
 *
 * @property int $id_kuliner
 * @property string $nama
 * @property string $foto
 * @property string $keterangan
 */
class Kuliner extends \yii\db\ActiveRecord
{
    public $image;
    public $file;
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
            [['keterangan'], 'required'],
            [['keterangan','tahun','status'], 'string'],
            [['nama'], 'string', 'max' => 100],
            [['foto'], 'string', 'max' => 255],
            [['image'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg,','checkExtensionByMimeType'=>false, 'maxSize' => 2048000, 'tooBig' => 'Ukuran Maksimal 2MB'],
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
            'tahun' =>'Tahun',
            'status' => 'Status',
            'keterangan' => 'Keterangan',
        ];
    }

    public function upload()
    {
        // $today = date('Y-m-d-H-i-s');

        if ($this->validate()) {
            $imgFile = $this->image->tempName;
            $imgName = strtotime("now").'-thumb-'.$this->image->baseName . '.' . $this->image->extension;
            // Image::thumbnail($imgFile, 1520, 900)
            Image::thumbnail($imgFile, 570, 320)->save(Yii::getAlias('@webroot/images/Kuliner/'.$imgName), ['quality' => 85]);
            $this->foto = $imgName;
            $fileName = strtotime("now").'-'.$this->image->baseName . '.' . $this->image->extension;
            $this->foto = $fileName;
            $upload = $this->image->saveAs( Yii::getAlias('@webroot/images/Kuliner/') . $fileName);
            return $upload;
        } else {
            return false;
        }
    }
}
