<?php

namespace frontend\modules\berita\models;

use Yii;

/**
 * This is the model class for table "jenis".
 *
 * @property integer $id
 * @property string $merk
 * @property string $tipe
 * @property integer $seat
 *
 * @property Kendaraan[] $kendaraans
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['merk', 'tipe', 'seat'], 'required'],
            [['seat'], 'integer'],
            [['merk', 'tipe'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merk' => 'Merk',
            'tipe' => 'Tipe',
            'seat' => 'Seat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraans()
    {
        return $this->hasMany(Kendaraan::className(), ['jenis_id' => 'id']);
    }
}
