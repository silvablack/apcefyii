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
use app\models\Jogadores;
use app\models\Categoria;
use app\models\Julgamento;
use app\models\Equipes;
use app\models\InfoJulgamento;
use app\models\Campeonato;
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
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
      $lastnews = Noticias::find()->orderBy('data DESC')->limit(10)->all();
      $lastgames = Jogos::find()->orderBy('data_jogo, hora')->where(['lower(sema)'=>strtolower('semana')])->limit(24)->all();
      $noticias_grid = Noticias::find()->joinWith(['noticiasImgs'])->orderBy('id DESC')->limit(15)->all();
      $categorias = Categoria::find()->all();
      $this->view->params['categorias'] = $categorias;
      return $this->render('index', ['categorias'=>$categorias,'noticias_grid'=>$noticias_grid,'noticias'=>$noticias, 'lastnews'=>$lastnews, 'lastgames'=>$lastgames]);
    }

    public function actionNoticias($categoria){
      $this->layout = 'interno';
      $query = Noticias::find()->orderBy('id DESC')->joinWith(['noticiasImgs'])->where(['categoria'=>$categoria]);
      $countQuery = clone $query;
      $pages = new Pagination(['totalCount'=>$countQuery->count()]);
      $model = $query->offset($pages->offset)->limit($pages->limit)->all();
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
            $categorias = Categoria::find()->all();
            $this->view->params['categorias'] = $categorias;
      return $this->render('noticias',[
        'model'=>$model,
        'pages'=>$pages,
        'noticias'=>$noticias,
        'categorias'=>$categorias
      ]);
    }

    public function actionNoticia($id){
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
            $categorias = Categoria::find()->all();
            $this->view->params['categorias'] = $categorias;
      $model = Noticias::find()->where(['noticias.id'=>$id])->joinWith(['noticiasImgs'])->one();
      return $this->render('noticia',['model'=>$model, 'noticias'=>$noticias, 'categorias'=>$categorias]);
    }

    public function actionAtestado($param){
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
      $model = new Jogadores;
      if($param == 'PEN'){
        $model = Jogadores::find()->where(['lower(at)'=>strtolower('AT')])->orderBy('nome_jogador')->all();
      }else{
        $model = Jogadores::find()->where(['lower(at)'=>strtolower('OK')])->orderBy('nome_jogador')->all();
      }
      $categorias = Categoria::find()->all();
            $this->view->params['categorias'] = $categorias;
      return $this->render('atestado',['noticias'=>$noticias, 'type'=>$param, 'model'=>$model, 'categorias'=>$categorias]);
    }

    public function actionPdf($file){
      $path = Yii::getAlias('@app');
      $completePath = $path.'/web/pdf/'.$file.'.pdf';
      return Yii::$app->response->sendFile($completePath, $file, ['inline'=>true]);
    }

    public function actionFutsal($ano){
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
            $categorias = Categoria::find()->all();
            $this->view->params['categorias'] = $categorias;
      return $this->render('futsal',['noticias'=>$noticias, 'ano'=>$ano, 'categorias'=>$categorias]);
    }

    public function actionSociety($ano){
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
            $categorias = Categoria::find()->all();
            $this->view->params['categorias'] = $categorias;
      return $this->render('society',['noticias'=>$noticias, 'ano'=>$ano, 'categorias'=>$categorias]);
    }

    public function actionTabelageral($categoria, $rodada = NULL){
      $categoria = Categoria::findOne($categoria);
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')->queryAll();
      $jogos = [];
      if($rodada == NULL){
        $jogos = Jogos::find()->orderBy('data_jogo, hora')->where(['categoria'=>$categoria->categoria, 'confirmacao_rodada'=>'SIM'])->all();
        $rodada = 'CONFIRMACAO RODADA';
      }elseif($rodada == 'all'){
        $jogos = Jogos::find()->orderBy('data_jogo, hora')->where(['categoria'=>$categoria->categoria])->all();
        $rodada = 'TODAS';
      }else{
        $jogos = Jogos::find()->orderBy('data_jogo, hora')->where(['categoria'=>$categoria->categoria, 'rodada'=>$rodada])->all();
        $rodada = $rodada.'ª RODADA';
      }
      $rodadas = Jogos::find()->select('rodada')->where(['categoria'=>$categoria->categoria])->groupBy('rodada')->orderBy('rodada')->all();
      $categorias = Categoria::find()->all();
      $this->view->params['categorias'] = $categorias;
      return $this->render('tabelageral',['categorias'=>$categorias,'categoria'=>$categoria,'noticias'=>$noticias, 'rodadas'=>$rodadas, 'jogos'=>$jogos, 'rodada'=>$rodada]);
    }

    /**
     * Displays interno.
     *
     * @return string
     */
    public function actionDisciplina($param)
    {
      $this->layout = 'interno';
      $campeonato = Campeonato::find()->one();
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
            $categorias = Categoria::find()->all();
            $this->view->params['categorias'] = $categorias;
      if($param == 'julgamento'){
        $julgamento = Julgamento::find()->where(['LOWER(convocado)'=>'sim'])->orderBy('nome_jogador')->all();
        $rjulgamento = Julgamento::find()->where(['LOWER(resultado)'=>'r'])->orderBy('nome_jogador')->all();
        return $this->render('julgamento', ['categorias'=>$categorias,'campeonato'=>$campeonato,'noticias'=>$noticias,'infoj'=>InfoJulgamento::find()->one(), 'julgamento'=>$julgamento,'rjulgamento'=>$rjulgamento, 'param'=>$param]);
      }elseif($param == 'suspensos'){
        $suspensos = Jogadores::find()->where(['LOWER(cartao)'=>'suspenso'])->orderBy('nome_jogador')->all();
        return $this->render('suspensos', ['categorias'=>$categorias,'campeonato'=>$campeonato,'noticias'=>$noticias, 'suspensos'=>$suspensos, 'param'=>$param]);
      }elseif($param == 'pendurados'){
        $pendurados = Jogadores::find()->where(['LOWER(cartao)'=>'pendurado'])->orderBy('nome_jogador')->all();
        return $this->render('pendurados', ['categorias'=>$categorias,'campeonato'=>$campeonato,'noticias'=>$noticias, 'pendurados'=>$pendurados, 'param'=>$param]);
      }

    }

    public function actionClassificacao($categoria, $chave = 'A'){
      $categoriaModel = Categoria::find()->where(['id'=>$categoria])->one();
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
      

      $classificacao = Equipes::find()->where(['categoria'=>$categoriaModel->categoria, 'chave'=>$chave])->orderBy('class')->andWhere(['>', 'class', 0])->all();
      $sqlAtk = 'SELECT * FROM equipes WHERE chave = :chave AND categoria = :cat AND GP > :gols ORDER BY GP DESC';
      $atakMaisPositivo = Equipes::findBySql($sqlAtk,[':gols'=>'0', 'chave'=>$chave, ':cat'=>$categoriaModel->categoria])->all();
      $melhorDefesa = Equipes::find()->where(['categoria'=>$categoriaModel->categoria, 'chave'=>$chave])->orderBy('GC')->andWhere(['>', 'GC', 0])->all();
      $classDisciplinar = Equipes::find()->where(['categoria'=>$categoriaModel->categoria, 'chave'=>$chave])->orderBy('classificacao_disciplinar')->andWhere(['>', 'classificacao_disciplinar', 0])->all();
    
      $sqlArt = 'SELECT J.nome_jogador, J.gols, J.amarelo, J.vermelho, J.time, J.id FROM jogadores as J INNER JOIN equipes as E ON E.equipe = J.time WHERE E.chave = :chave AND J.categoria = :cat AND J.gols > :gols ORDER BY J.gols DESC LIMIT 10';
      $artilheiros = Jogadores::findBySql($sqlArt,[':gols'=>'0', ':chave'=>$chave, ':cat'=>$categoriaModel->categoria])->all();
      
      $sqlGolsContra = 'SELECT J.nome_jogador, J.gol_contra, J.partidas,  J.time, J.id FROM jogadores as J INNER JOIN equipes as E ON E.equipe = J.time WHERE E.chave = :chave AND J.categoria = :cat AND J.gol_contra > :gols ORDER BY J.gol_contra DESC LIMIT 10';
      $golsContra = Jogadores::findBySql($sqlGolsContra,[':gols'=>'0', ':chave'=>$chave, ':cat'=>$categoriaModel->categoria])->all();

      $sqlGolArt = 'SELECT J.nome_jogador, J.partidas,  J.time, J.id, J.gols FROM jogadores as J INNER JOIN equipes as E ON E.equipe = J.time WHERE E.chave = :chave AND J.categoria = :cat AND J.jgd = :jgd AND gols > :gols ORDER BY J.gols DESC LIMIT 10';
      $goleirosArtilheiros = Jogadores::findBySql($sqlGolArt,[':gols'=>'0', ':chave'=>$chave, ':cat'=>$categoriaModel->categoria,':jgd'=>'Gol'])->all();
      $categorias = Categoria::find()->all();
      $this->view->params['categorias'] = $categorias;
      return $this->render('classificacao', [
        'noticias'=>$noticias,
        'categoria'=>$categoriaModel,
        'classificacao'=>$classificacao,
        'atakMaisPositivo'=>$atakMaisPositivo,
        'melhorDefesa'=>$melhorDefesa,
        'classDisciplinar'=>$classDisciplinar,
        'artilheiros'=>$artilheiros,
        'golsContra'=>$golsContra,
        'goleirosArtilheiros'=>$goleirosArtilheiros,
        'chaves'=>Equipes::find()->select('chave')->groupBy('chave')->all(),
        'chave'=>$chave,
        'categorias'=>$categorias
      ]);
    }

    public function actionEquipe($id){
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
      $equipe = Equipes::findOne($id);
      $sql = 'SELECT * FROM jogos WHERE categoria = :categoria AND (equipe1 = :eq OR equipe2 = :eq) ORDER BY data_jogo, hora';
      $jogos = Jogos::findBySql($sql,[':categoria'=>$equipe->categoria, ':eq'=>$equipe->equipe])->all();
      $jogadores = Jogadores::find()->where(['time'=>$equipe->equipe, 'categoria'=>$equipe->categoria])->orderBy('nome_jogador')->all();
      $categorias = Categoria::find()->all();
            $this->view->params['categorias'] = $categorias;
      return $this->render('equipe', ['categorias'=>$categorias,'noticias'=>$noticias,'jogadores'=>$jogadores, 'jogos'=>$jogos, 'equipe'=>$equipe]);
    }

    public function actionTabelagol($id){
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
            $categorias = Categoria::find()->all();
            $this->view->params['categorias'] = $categorias;
      return $this->render('embreve', ['noticias'=>$noticias, 'categorias'=>$categorias]);
    }

    public function actionGol($id){
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
            $categorias = Categoria::find()->all();
            $this->view->params['categorias'] = $categorias;
      return $this->render('embreve', ['noticias'=>$noticias, 'categorias'=>$categorias]);
    }

    public function actionSumula($jogo){
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
            $categorias = Categoria::find()->all();
            $this->view->params['categorias'] = $categorias;
      return $this->render('embreve', ['noticias'=>$noticias, 'categorias'=>$categorias]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContato()
    {
      $this->layout = 'interno';
      //MENU NOTICIAS LAYOUT
      $noticias = Yii::$app->db->createCommand('SELECT n.id, n.categoria, n.titulo, n.noticia, (SELECT src FROM noticias_img nm WHERE nm.noticia_id = n.id  LIMIT 1) as src FROM noticias n 
      INNER JOIN (SELECT max(id) as nid, categoria FROM noticias GROUP BY categoria) nw ON nw.nid = n.id')
            ->queryAll();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contato', [
            'model' => $model,
            'noticias' => $noticias, 'categorias'=>Categoria::find()->all()
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

    /**
     * Set votacao
     * @return render
     */
    public function actionVotar(){
      if(Yii::$app->request->isGet){
        $model = new \app\models\Votacao;
        $data = Yii::$app->request->get('opcao');
        $model->opcao = $data;
        $model->ip = Yii::$app->request->userIP;
        if($model->save()){
          \Yii::$app->session->setFlash('votacao:ok', 'Você já votou!');
          $this->redirect('index');
        }
      }
    }
}
