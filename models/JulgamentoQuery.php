<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Julgamento]].
 *
 * @see Julgamento
 */
class JulgamentoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Julgamento[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Julgamento|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
