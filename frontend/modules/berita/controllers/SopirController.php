<?php

namespace frontend\modules\berita\controllers;

use Yii;
use frontend\modules\berita\models\Sopir;
use frontend\modules\berita\models\SopirSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

//tambahan
use yii\web\UploadedFile;

/**
 * SopirController implements the CRUD actions for Sopir model.
 */
class SopirController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            //-----tambahan------
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index','view'],
                        'roles' => ['?'],//bukan member user
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index','view'],
                        'roles' => ['@'],//member user
                    ],
                ],
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Sopir models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SopirSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sopir model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Sopir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    /*public function actionCreate()
    {
        $model = new Sopir();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }*/
    public function actionCreate()
    {
        $model = new Sopir();
        /*
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } 
        */
        if ($model->load(Yii::$app->request->post())){
            //upload file
            $model->fotoFile = UploadedFile::getInstance($model, 'fotoFile');
        
            if($model->validate() && !empty($model->fotoFile)){
                //$nama = $model->fotoFile->baseName.'.'.$model->fotoFile->extension;
                $nama = $model->sim.'.'.$model->fotoFile->extension;
                $model->foto = $nama; // simpan nama file gambar
                $model->save();// proses simpan data2
                //simpan ke folder
                $model->fotoFile->saveAs('foto/'.$nama);
            }
            else{ //--------tidak ada upload file------------
               $model->save(); 
            } 
             
            return $this->redirect(['view', 'id' => $model->id]);

        }
        else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Sopir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    /*public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }*/
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        /*
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } 
        */
        if ($model->load(Yii::$app->request->post())){
            //upload file
            $model->fotoFile = UploadedFile::getInstance($model, 'fotoFile');
        
            if($model->validate() && !empty($model->fotoFile)){
                //$nama = $model->fotoFile->baseName.'.'.$model->fotoFile->extension;
                $nama = $model->sim.'.'.$model->fotoFile->extension;
                $model->foto = $nama; // simpan nama file gambar
                $model->save();// proses simpan data2
                //simpan ke folder
                $model->fotoFile->saveAs('foto/'.$nama);
            }
            else{ //--------tidak ada upload file------------
               $model->save(); 
            } 
             
            return $this->redirect(['view', 'id' => $model->id]);

        }
        else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Sopir model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sopir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sopir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sopir::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
