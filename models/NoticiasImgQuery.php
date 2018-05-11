<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[NoticiasImg]].
 *
 * @see NoticiasImg
 */
class NoticiasImgQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return NoticiasImg[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return NoticiasImg|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
