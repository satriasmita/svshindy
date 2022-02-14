<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
use yii\imagine\Image;
/**
 * This is the model class for table "restoran".
 *
 * @property int $restoran_id
 * @property string $restoran_nama
 * @property string $restoran_alamat
 * @property string $restoran_telepon
 * @property string $restoran_detail
 * @property string $restoran_photo
 * @property string $restoran_pemilik
 * @property string $restoran_latitude
 * @property string $restoran_longitude
 */
class Restoran extends \yii\db\ActiveRecord
{
    public $image;
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'restoran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['restoran_alamat', 'restoran_detail','tahun','status'], 'string'],
            [['restoran_nama', 'restoran_telepon', 'restoran_pemilik'], 'string', 'max' => 50],
            [['restoran_photo', 'restoran_latitude', 'restoran_longitude'], 'string', 'max' => 255],
            [['image'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg,','checkExtensionByMimeType'=>false, 'maxSize' => 2048000, 'tooBig' => 'Ukuran Maksimal 2MB'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'restoran_id' => 'Restoran ID',
            'restoran_nama' => 'Restoran Nama',
            'restoran_alamat' => 'Restoran Alamat',
            'restoran_telepon' => 'Restoran Telepon',
            'restoran_detail' => 'Restoran Detail',
            'restoran_photo' => 'Restoran Photo',
            'restoran_pemilik' => 'Restoran Pemilik',
            'restoran_latitude' => 'Restoran Latitude',
            'restoran_longitude' => 'Restoran Longitude',
            'tahun' => 'Tahun',
            'status' => 'Status',
        ];
    }
    public function upload()
    {
        // $today = date('Y-m-d-H-i-s');

        if ($this->validate()) {
            $imgFile = $this->image->tempName;
            $imgName = strtotime("now").'-thumb-'.$this->image->baseName . '.' . $this->image->extension;
            // Image::thumbnail($imgFile, 1520, 900)
            Image::thumbnail($imgFile, 570, 320)->save(Yii::getAlias('@webroot/images/Restoran/'.$imgName), ['quality' => 85]);
            $this->restoran_photo = $imgName;
            $fileName = strtotime("now").'-'.$this->image->baseName . '.' . $this->image->extension;
            $this->restoran_photo = $fileName;
            $upload = $this->image->saveAs( Yii::getAlias('@webroot/images/Restoran/') . $fileName);
            return $upload;
        } else {
            return false;
        }
    }
}
