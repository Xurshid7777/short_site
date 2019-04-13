<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Short;

/**
 * ShortsSearch represents the model behind the search form of `common\models\Short`.
 */
class ShortsSearch extends Short
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'view'], 'integer'],
            [['name', 'user', 'url', 'link'], 'safe'],
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
        $query = Short::find();

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
            'view' => $this->view,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'link', $this->link]);

        return $dataProvider;
    }
}
