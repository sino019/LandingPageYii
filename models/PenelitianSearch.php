<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\penelitian;

/**
 * PenelitianSearch represents the model behind the search form of `app\models\penelitian`.
 */
class PenelitianSearch extends penelitian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penelitian'], 'integer'],
            [['judul_penelitian', 'peneliti_utama', 'tanggal_mulai', 'tanggal_selesai', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = penelitian::find();

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
            'id_penelitian' => $this->id_penelitian,
            'tanggal_mulai' => $this->tanggal_mulai,
            'tanggal_selesai' => $this->tanggal_selesai,
        ]);

        $query->andFilterWhere(['like', 'judul_penelitian', $this->judul_penelitian])
            ->andFilterWhere(['like', 'peneliti_utama', $this->peneliti_utama])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
