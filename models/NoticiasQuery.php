<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Noticias]].
 *
 * @see Noticias
 */
class NoticiasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Noticias[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Noticias|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
