<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[InfoJulgamento]].
 *
 * @see InfoJulgamento
 */
class InfoJulgamentoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return InfoJulgamento[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return InfoJulgamento|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
