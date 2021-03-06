<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property int $TipoId
 * @property string $TipoDesc Descripción
 *
 * @property Tipos $tipos
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TipoDesc'], 'required'],
            [['TipoDesc'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TipoId' => 'Tipo ID',
            'TipoDesc' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipos()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TipoId']);
    }
}
