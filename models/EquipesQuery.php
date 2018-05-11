<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Equipes]].
 *
 * @see Equipes
 */
class EquipesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Equipes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Equipes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
