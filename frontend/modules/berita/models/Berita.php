<?php

namespace frontend\modules\berita\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\Expression;


/**
 * This is the model class for table "berita".
 *
 * @property integer $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $isi
 * @property string $gambar
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'berita';
    }

    public function behaviors()
    {
        return [
        [
            'class' => TimestampBehavior::className(),
            'value' => new Expression('NOW()'),
        ],
            BlameableBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi', 'isi'], 'required'],
            [['deskripsi', 'isi'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['judul'], 'string', 'max' => 100],
            [['gambar'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'isi' => 'Isi',
            'gambar' => 'Gambar',
            'created_at' => 'Dibuat Pada',
            'created_by' => 'Dibuat Oleh',
            'updated_at' => 'Update Pada',
            'updated_by' => 'Update Oleh',
        ];
    }
}
