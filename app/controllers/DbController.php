<?php

namespace app\controllers;

use app\models\Employers;
use yii\data\ActiveDataProvider;
//use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class DbController extends Controller
{
        /**
     * @inheritDoc
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
        ];
    }

    public function actionIndex()
    {
        $employers = Employers::find()->orderBy(['id' => SORT_ASC])->all();
        return $this->render('index', ['employers' => $employers]);
    }

    public function actionList()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Employers::find()->orderBy(['id' => SORT_ASC]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('list', ['dataProvider' => $dataProvider]);
    }

}