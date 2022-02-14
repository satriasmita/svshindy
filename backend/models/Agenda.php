<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
use yii\imagine\Image;
use yii\behaviors\SluggableBehavior;
/**
 * This is the model class for table "agenda".
 *
 * @property int $agenda_id
 * @property string $agenda_nama
 * @property string $agenda_isi
 * @property string $agenda_lokasi
 * @property string $agenda_mulai
 * @property string $agenda_selesai
 * @property string $agenda_photoid
 * @property string $agenda_latitude
 * @property string $agenda_longitude
 */
class Agenda extends \yii\db\ActiveRecord
{
    public $image;
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['agenda_isi', 'agenda_lokasi','status'], 'string'],
            [['agenda_nama', 'agenda_mulai', 'agenda_selesai', 'agenda_photoid', 'agenda_latitude', 'agenda_longitude'], 'string', 'max' => 255],
            [['image'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg,','checkExtensionByMimeType'=>false, 'maxSize' => 2048000, 'tooBig' => 'Ukuran Maksimal 2MB'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'agenda_id' => 'ID',
            'agenda_nama' => 'Nama Agenda',
            'agenda_isi' => 'Isi Agenda',
            'agenda_lokasi' => 'Lokasi Agenda',
            'agenda_mulai' => 'Mulai Agenda',
            'agenda_selesai' => 'Selesai Agenda',
            'agenda_photoid' => 'Photoid Agenda',
            'agenda_latitude' => 'Latitude Agenda',
            'agenda_longitude' => 'Longitude Agenda',
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
            Image::thumbnail($imgFile, 570, 320)->save(Yii::getAlias('@webroot/images/Agenda/'.$imgName), ['quality' => 85]);
            $this->agenda_photoid = $imgName;
            $fileName = strtotime("now").'-'.$this->image->baseName . '.' . $this->image->extension;
            $this->agenda_photoid = $fileName;
            $upload = $this->image->saveAs( Yii::getAlias('@webroot/images/Agenda/') . $fileName);
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
