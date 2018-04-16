<?php

namespace frontend\modules\berita\models;

use Yii;

/**
 * This is the model class for table "tarif".
 *
 * @property integer $id
 * @property double $tarif_perhari
 * @property double $tarif_overtime
 * @property integer $kendaraan_id
 *
 * @property Kendaraan $kendaraan
 */
class Tarif extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarif';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tarif_perhari', 'tarif_overtime', 'kendaraan_id'], 'required'],
            [['tarif_perhari', 'tarif_overtime'], 'number'],
            [['kendaraan_id'], 'integer'],
            //[['jenis_id'], 'integer'],
            [['kendaraan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kendaraan::className(), 'targetAttribute' => ['kendaraan_id' => 'id']],
            //[['jenis_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::className(), 'targetAttribute' => ['jenis_id' => 'id']],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tarif_perhari' => 'Tarif Perhari',
            'tarif_overtime' => 'Tarif Overtime',
            'kendaraan_id' => 'Kendaraan ID',
            //'jenis_id' => 'Jenis ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraan()
    {
        return $this->hasOne(Kendaraan::className(), ['id' => 'kendaraan_id']);
    }
    // public function getJenis()
    // {
    //     return $this->hasOne(Jenis::className(), ['id' => 'jenis_id']);
    // }
    // public function getTarifs()
    // {
    //     return $this->hasMany(Tarif::className(), ['kendaraan_id' => 'id']);
    // }
}
