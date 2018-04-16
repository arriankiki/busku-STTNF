<?php

namespace frontend\modules\berita\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property integer $id
 * @property integer $kendaraan_id
 * @property integer $pelanggan_id
 * @property integer $sopir_id
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property string $tgl_overtime
 * @property string $status
 *
 * @property Kendaraan $kendaraan
 * @property Pelanggan $pelanggan
 * @property Sopir $sopir
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pelanggan_id', 'sopir_id', 'tgl_mulai', 'tgl_selesai', 'status'], 'required'],
            [['pelanggan_id', 'sopir_id'], 'integer'],
            [['tgl_mulai', 'tgl_selesai', 'tgl_overtime'], 'safe'],
            [['status'], 'string'],
            [['kendaraan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kendaraan::className(), 'targetAttribute' => ['kendaraan_id' => 'id']],
            [['pelanggan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['pelanggan_id' => 'id']],
            [['sopir_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sopir::className(), 'targetAttribute' => ['sopir_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kendaraan_id' => 'Kendaraan',
            'pelanggan_id' => 'Pelanggan',
            'sopir_id' => 'Sopir',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_selesai' => 'Tgl Selesai',
            'tgl_overtime' => 'Tgl Overtime',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraan()
    {
        return $this->hasOne(Kendaraan::className(), ['id' => 'kendaraan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(Pelanggan::className(), ['id' => 'pelanggan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSopir()
    {
        return $this->hasOne(Sopir::className(), ['id' => 'sopir_id']);
    }
}
