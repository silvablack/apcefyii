<?php
    namespace app\models;
     
    use Yii;
    use yii\base\InvalidParamException;
    use yii\base\Model;
    use app\models\User;
     
    /**
     * Change password form for current user only
     */
    class ChangePasswordForm extends Model
    {
        public $id;
        public $password;
        public $confirm_password;
     
        /**
         * @var \app\models\User
         */
        private $_user;
     
        /**
         * Creates a form model given a token.
         *
         * @param  string                          $token
         * @param  array                           $config name-value pairs that will be used to initialize the object properties
         * @throws \yii\base\InvalidParamException if token is empty or not valid
         */
        public function __construct($id, $config = [])
        {
            $this->_user = User::findIdentity($id);
            
            if (!$this->_user) {
                throw new InvalidParamException('Usuário não encontrado!');
            }
            
            $this->id = $this->_user->id;
            parent::__construct($config);
        }
     
        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                [['password','confirm_password'], 'required'],
                [['password','confirm_password'], 'string', 'min' => 4],
                ['confirm_password', 'compare', 'compareAttribute' => 'password'],
            ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels(){
            return [
                'password'=>\Yii::t('app','Nova senha'),
                'confirm_password'=>\Yii::t('app','Confirmação de senha')
            ];
        }
     
        /**
         * Changes password.
         *
         * @return boolean if password was changed.
         */
        public function changePassword()
        {
            $user = $this->_user;
            $user->setPassword($this->password);

            $users = \app\models\Users::findOne(100);
            $users->password = $user->password;
            if($users->save(false)){
                return true;
            }else{
                \Yii::$app->session->setFlash('error', 'Ocorreu um erro, favor, tentar novamente, ou se persistir, entre em contato com o administrador do site.');
                return false;
            }
        }
    }