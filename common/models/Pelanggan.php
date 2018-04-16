<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $telepon
 *
 * @property Transaksi[] $transaksis
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'telepon'], 'required'],
            [['alamat'], 'string'],
            [['nama'], 'string', 'max' => 45],
            [['telepon'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama Pelanggan',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['pelanggan_id' => 'id']);
    }
}
