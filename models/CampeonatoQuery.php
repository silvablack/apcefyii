<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Campeonato]].
 *
 * @see Campeonato
 */
class CampeonatoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Campeonato[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Campeonato|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
