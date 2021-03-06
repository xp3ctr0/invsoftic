<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\User;

/**
 * UserSearch represents the model behind the search form of `backend\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'depid_fk', 'tiposid_fk1', 'tiposid_fk2', 'status', 'created_at', 'updated_at'], 'integer'],
            [['usuiden', 'usuprimnomb', 'ususegunomb', 'usuprimapel', 'ususeguapel', 'usutelepers', 'username', 'usuteleofic', 'email', 'auth_key', 'password_hash', 'password_reset_token'], 'safe'],
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
        $query = User::find();

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
            'depid_fk' => $this->depid_fk,
            'tiposid_fk1' => $this->tiposid_fk1,
            'tiposid_fk2' => $this->tiposid_fk2,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'usuiden', $this->usuiden])
            ->andFilterWhere(['like', 'usuprimnomb', $this->usuprimnomb])
            ->andFilterWhere(['like', 'ususegunomb', $this->ususegunomb])
            ->andFilterWhere(['like', 'usuprimapel', $this->usuprimapel])
            ->andFilterWhere(['like', 'ususeguapel', $this->ususeguapel])
            ->andFilterWhere(['like', 'usutelepers', $this->usutelepers])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'usuteleofic', $this->usuteleofic])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token]);

        return $dataProvider;
    }
}
