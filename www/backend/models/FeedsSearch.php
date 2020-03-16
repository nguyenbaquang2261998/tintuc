<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Feeds;

/**
 * FeedsSearch represents the model behind the search form of `backend\models\Feeds`.
 */
class FeedsSearch extends Feeds
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'source', 'title', 'crawler_id', 'type', 'user_id', 'description', 'url_source', 'category', 'img_source', 'created_time', 'retry_count', 'status', 'image'], 'safe'],
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
        $query = Feeds::find();

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
        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'source', $this->source])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'crawler_id', $this->crawler_id])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'url_source', $this->url_source])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'img_source', $this->img_source])
            ->andFilterWhere(['like', 'created_time', $this->created_time])
            ->andFilterWhere(['like', 'retry_count', $this->retry_count])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
