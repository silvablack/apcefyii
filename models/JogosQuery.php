<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jogos]].
 *
 * @see Jogos
 */
class JogosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Jogos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jogos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
