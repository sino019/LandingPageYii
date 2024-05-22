<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\berita;

/**
 * beritaSearch represents the model behind the search form of `app\models\berita`.
 */
class beritaSearch extends berita
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Judul', 'Konten', 'Penulis', 'Tanggal_Publikasi', 'Kategori', 'Ringkasan', 'Status'], 'safe'],
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
        $query = berita::find();

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
            'ID' => $this->ID,
            'Tanggal_Publikasi' => $this->Tanggal_Publikasi,
        ]);

        $query->andFilterWhere(['like', 'Judul', $this->Judul])
            ->andFilterWhere(['like', 'Konten', $this->Konten])
            ->andFilterWhere(['like', 'Penulis', $this->Penulis])
            ->andFilterWhere(['like', 'Kategori', $this->Kategori])
            ->andFilterWhere(['like', 'Ringkasan', $this->Ringkasan])
            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
