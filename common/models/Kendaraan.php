<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kendaraan".
 *
 * @property int $id
 * @property string $nopol
 * @property int $jenis_id
 * @property string $tahun
 * @property string $fasilitas
 * @property string $status
 * @property string $foto
 *
 * @property Jenis $jenis
 * @property Tarif[] $tarifs
 * @property Transaksi[] $transaksis
 */
class Kendaraan extends \yii\db\ActiveRecord
{
    public $fotoFile;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kendaraan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nopol', 'jenis_id', 'tahun', 'fasilitas', 'status'], 'required'],
            [['jenis_id'], 'integer'],
            [['fasilitas', 'status'], 'string'],
            [['nopol'], 'string', 'max' => 10],
            [['tahun'], 'string', 'max' => 4],
            [['foto'], 'string', 'max' => 45],
            [['nopol'], 'unique'],
            [['jenis_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::className(), 'targetAttribute' => ['jenis_id' => 'id']],

            [['fotoFile'], 'file',
                'extensions'=>['jpg','png','gif'],
                'maxSize' => 521000, //max 500 KB
                'skipOnEmpty' => true, //boleh kosong
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nopol' => 'Nomor Polisi',
            'jenis_id' => 'Jenis ID',
            'tahun' => 'Tahun',
            'fasilitas' => 'Fasilitas',
            'status' => 'Status',
            'foto' => 'Foto',
            'fotoFile' => 'Foto Bus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenis()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'jenis_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTarifs()
    {
        return $this->hasMany(Tarif::className(), ['kendaraan_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['kendaraan_id' => 'id']);
    }

    public function getFasilitas() {
            return [
                'Reclining seats'=>'Reclining seats', 
                'Foot rests'=>'Foot rests', 
                'LCD'=>'LCD', 
                'Multimedia player'=>'Multimedia player', 
                'Wireless microphone'=>'Wireless microphone', 
                'Koneksi wifi'=>'Koneksi wifi', 
                'Toilet'=>'Toilet',
            ];
    }
}
