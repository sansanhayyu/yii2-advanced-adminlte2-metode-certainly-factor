<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Konsultasi;

/**
 * KonsultasiSearch represents the model behind the search form of `common\models\Konsultasi`.
 */
class KonsultasiSearch extends Konsultasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_konsultasi', 'usia_penderita', 'id_user'], 'integer'],
            [['nama_penderita', 'jenis_kelamin', 'alamat_penderita', 'kode_diagnosa', 'hasil_cf', 'tanggal'], 'safe'],
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
        $query = Konsultasi::find();

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
            'id_konsultasi' => $this->id_konsultasi,
            'usia_penderita' => $this->usia_penderita,
            'tanggal' => $this->tanggal,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'nama_penderita', $this->nama_penderita])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'alamat_penderita', $this->alamat_penderita])
            ->andFilterWhere(['like', 'kode_diagnosa', $this->kode_diagnosa])
            ->andFilterWhere(['like', 'hasil_cf', $this->hasil_cf]);

        return $dataProvider;
    }
}
