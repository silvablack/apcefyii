<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Noticias;
use app\models\Jogos;
use yii\data\Pagination;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
      $noticias = Yii::$app->db->createCommand('SELECT DISTINCT n.id, n.categoria, n.titulo, n.noticia, n.data, nimg.src FROM noticias_img nimg INNER JOIN noticias n ON n.id = nimg.noticia_id ORDER BY data LIMIT 4 ')
            ->queryAll();
      $lastnews = Noticias::find()->orderBy('id DESC')->joinWith(['noticiasImgs'])->limit(10)->all();
      $lastgames = Jogos::find()->orderBy('data_jogo')->where(['lower(sema)'=>strtolower('semana')])->limit(24)->all();

      return $this->render('index', ['noticias'=>$noticias, 'lastnews'=>$lastnews, 'lastgames'=>$lastgames]);
    }

    public function actionNoticias($categoria){
      $this->layout = 'interno';
      $query = Noticias::find()->orderBy('id DESC')->joinWith(['noticiasImgs'])->where(['categoria'=>$categoria]);
      $countQuery = clone $query;
      $pages = new Pagination(['totalCount'=>$countQuery->count()]);
      $model = $query->offset($pages->offset)->limit($pages->limit)->all();
      $noticias = Yii::$app->db->createCommand('SELECT DISTINCT n.id, n.categoria, n.titulo, n.noticia, n.data, nimg.src FROM noticias_img nimg INNER JOIN noticias n ON n.id = nimg.noticia_id ORDER BY data LIMIT 4 ')
            ->queryAll();

            $translate_categoria = array(
            	1=>'LIVRE PRATA',
            	2=>'LIVRE OURO',
            	3=>'QUARENTÃO',
            	4=>'CINQUENTÃO'
            );

      return $this->render('noticias',[
        'model'=>$model,
        'pages'=>$pages,
        'noticias'=>$noticias,
        'categoria'=>$translate_categoria[$categoria]
      ]);
    }

    /**
     * Displays interno.
     *
     * @return string
     */
    public function actionIndex2()
    {
      $this->layout = 'interno';
      $this->view->params['noticias'] = '';
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
