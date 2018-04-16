<?php

namespace frontend\modules\berita\models;

use Yii;

/**
 * This is the model class for table "sopir".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $telepon
 * @property string $ktp
 * @property string $sim
 * @property string $status
 * @property string $foto
 *
 * @property Transaksi[] $transaksis
 */
class Sopir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    //======buat variabel baru for upload
    public $fotoFile;
    
    public static function tableName()
    {
        return 'sopir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'telepon', 'ktp', 'sim', 'status'], 'required'],
            [['alamat', 'status'], 'string'],
            [['nama', 'foto'], 'string', 'max' => 45],
            [['telepon'], 'string', 'max' => 15],
            [['ktp', 'sim'], 'string', 'max' => 20],
            [['ktp'], 'unique'],
            [['sim'], 'unique'],
            [['fotoFile'], 'file',
                'extensions' => ['jpg','png','gif','jpeg'],
                'maxSize'=>1024000, //ukuran maksimal file
                'skipOnEmpty'=>true, //boleh kosong
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
            'nama' => 'Nama Sopir',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'ktp' => 'Ktp',
            'sim' => 'Sim',
            'status' => 'Status',
            'foto' => 'Foto',
            'fotoFile'=>'Foto Sopir',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['sopir_id' => 'id']);
    }
}
