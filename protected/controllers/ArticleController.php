<?phpclass ArticleController extends Controller {    /**     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning     * using two-column layout. See 'protected/views/layouts/column2.php'.     */    public $layout = '//layouts/column2';    /**     * @return array action filters     */    public function filters() {        return array(            'accessControl', // perform access control for CRUD operations        );    }    /**     * Specifies the access control rules.     * This method is used by the 'accessControl' filter.     * @return array access control rules     */    public function accessRules() {        return array(            array('allow', // allow all users to perform 'index' and 'view' actions                'actions' => array('index', 'view'),                'users' => array('*'),            ),            array('allow', // allow authenticated user to perform 'create' and 'update' actions                'actions' => array('create', 'update'),                'users' => array('@'),            ),            array('allow', // allow admin user to perform 'admin' and 'delete' actions                'actions' => array('admin', 'delete'),                'users' => array('admin'),            ),            array('deny', // deny all users                'users' => array('*'),            ),        );    }    /**     * Displays a particular model.     * @param integer $id the ID of the model to be displayed     */    public function actionView($id) {        $this->render('view', array(            'model' => $this->loadModel($id),        ));    }    /**     * Lists all models.     */    public function actionIndex() {//        $cate_id = $_GET['cate_id'];////        if ($cate_id) {////            $cri = new CDbCriteria(array(//                        'condition' => 'parent_id =' . $cate_id//                    ));////            $acat = ArticleCat::model()->findAll($cri);////            if ($acat) {////                foreach ($acat as $ac) {////                    $cids[] = $ac->cate_id;//                }////                $cid = implode(',', $cids);////                $condition = $cate_id ? ' cate_id in(' . $cate_id . ',' . $cid . ')' : '';//            } else {////                $condition = $cate_id ? ' cate_id in(' . $cate_id . ')' : '';//            }//        }//        $cate = ArticleCat::model()->findByPk($cate_id);        $cri = new CDbCriteria(array(                    'order' => 'article_id desc, create_time asc'                ));        $lists = Article::model()->findAll($cri);        $this->render('index', array(            'lists' => $lists,//            'cate' => $cate        ));    }    /**     * Returns the data model based on the primary key given in the GET variable.     * If the data model is not found, an HTTP exception will be raised.     * @param integer the ID of the model to be loaded     */    public function loadModel($id) {        $model = Article::model()->findByPk($id);        if ($model === null)            throw new CHttpException(404, 'The requested page does not exist.');        return $model;    }}