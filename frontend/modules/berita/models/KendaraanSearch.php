<?php

namespace frontend\modules\berita\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\berita\models\Kendaraan;

/**
 * KendaraanSearch represents the model behind the search form about `frontend\modules\berita\models\Kendaraan`.
 */
class KendaraanSearch extends Kendaraan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jenis_id'], 'integer'],
            [['nopol', 'tahun', 'fasilitas', 'status', 'foto'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kendaraan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'jenis_id' => $this->jenis_id,
        ]);

        $query->andFilterWhere(['like', 'nopol', $this->nopol])
            ->andFilterWhere(['like', 'tahun', $this->tahun])
            ->andFilterWhere(['like', 'fasilitas', $this->fasilitas])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
