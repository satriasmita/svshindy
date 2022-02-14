<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property int $agenda_id
 * @property string $agenda_nama
 * @property string $agenda_isi
 * @property string $agenda_lokasi
 * @property string $agenda_mulai
 * @property string $agenda_selesai
 * @property int $status
 * @property string $agenda_photoid
 * @property string $agenda_latitude
 * @property string $agenda_longitude
 */
class Agenda extends \yii\db\ActiveRecord
{
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
            [['agenda_isi', 'agenda_lokasi'], 'string'],
            [['status'], 'required'],
            [['status'], 'integer'],
            [['agenda_nama', 'agenda_mulai', 'agenda_selesai', 'agenda_photoid', 'agenda_latitude', 'agenda_longitude'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'agenda_id' => 'Agenda ID',
            'agenda_nama' => 'Agenda Nama',
            'agenda_isi' => 'Agenda Isi',
            'agenda_lokasi' => 'Agenda Lokasi',
            'agenda_mulai' => 'Agenda Mulai',
            'agenda_selesai' => 'Agenda Selesai',
            'status' => 'Status',
            'agenda_photoid' => 'Agenda Photoid',
            'agenda_latitude' => 'Agenda Latitude',
            'agenda_longitude' => 'Agenda Longitude',
        ];
    }
}
