<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Votacao]].
 *
 * @see Votacao
 */
class VotacaoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Votacao[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Votacao|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
