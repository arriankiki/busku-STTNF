<?php

namespace backend\controllers;

use Yii;
use common\models\Kendaraan;
use common\models\KendaraanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

//tambahan
use yii\web\UploadedFile;


/**
 * KendaraanController implements the CRUD actions for Kendaraan model.
 */
class KendaraanController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Kendaraan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KendaraanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kendaraan model.
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
     * Creates a new Kendaraan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kendaraan();
             
        /*
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
             
            return $this->redirect(['view', 'id' => $model->id]);
        } 
        */
        if ($model->load(Yii::$app->request->post())){
            //-----------implode data array fasilitas--------
            $model->fasilitas = implode(",", $model->fasilitas);  
            //upload file
            $model->fotoFile = UploadedFile::getInstance($model, 'fotoFile');
        
            if($model->validate() && !empty($model->fotoFile)){
                //$nama = $model->fotoFile->baseName.'.'.$model->fotoFile->extension;
                $nama = $model->nopol.'.'.$model->fotoFile->extension;
                $model->foto = $nama; // simpan nama file gambar
                $model->save();// proses simpan data2
                //simpan ke folder
                $model->fotoFile->saveAs('gambar/'.$nama);
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
     * Updates an existing Kendaraan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        //pisahkan string ke element2 array u/ checkbox
        $model->fasilitas = explode(",", $model->fasilitas);

        /*
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } 
        */
        if ($model->load(Yii::$app->request->post())){
            //-----------implode data array fasilitas--------
            $model->fasilitas = implode(",", $model->fasilitas);
            //upload file
            $model->fotoFile = UploadedFile::getInstance($model, 'fotoFile');
        
            if($model->validate() && !empty($model->fotoFile)){
                //$nama = $model->fotoFile->baseName.'.'.$model->fotoFile->extension;
                $nama = $model->nopol.'.'.$model->fotoFile->extension;
                $model->foto = $nama; // simpan nama file gambar
                $model->save();// proses simpan data2
                //simpan ke folder
                $model->fotoFile->saveAs('gambar/'.$nama);
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
     * Deletes an existing Kendaraan model.
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
     * Finds the Kendaraan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kendaraan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kendaraan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionGrafik(){

         $rs =Yii::$app->db->createCommand('SELECT tahun, COUNT(tahun) AS jumlah FROM
         kendaraan GROUP BY tahun')->queryAll();

         return $this->render('grafik',['dgrafik'=> $rs ]);
    }
}
