<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $user_id auto incrementing user_id of each user, unique index
 * @property string $user_name user's name, unique
 * @property string $user_password_hash user's password in salted and hashed format
 * @property string $user_email user's email, unique
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'user_password_hash', 'user_email'], 'required'],
            [['user_name', 'user_email'], 'string', 'max' => 64],
            [['user_password_hash'], 'string', 'max' => 255],
            [['user_name'], 'unique'],
            [['user_email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'ID'),
            'user_name' => Yii::t('app', 'Usuário'),
            'user_password_hash' => Yii::t('app', 'Senha'),
            'user_email' => Yii::t('app', 'Email'),
        ];
    }

    /**
     * @inheritdoc
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }
}
