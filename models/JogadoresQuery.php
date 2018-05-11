<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jogadores]].
 *
 * @see Jogadores
 */
class JogadoresQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Jogadores[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jogadores|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
