<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Feeds;
use yii\data\ActiveDataProvider;
use common\controllers\Frontend;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\UserProfile;

/**
 * FeedsController implements the CRUD actions for Feeds model.
 */
class FeedsController extends Frontend {

    /**
     * Lists all Feeds models.
     * @return mixed
     */
    public function actionIndex() {
        $datas = Feeds::find()->where(['status' => 1])->orderBy('created_time desc')->limit(20)->all();
        $profile = "";
        if (Yii::$app->user->identity) {
            $profile = UserProfile::find()->where(['user_id' => Yii::$app->user->identity->_id])->one();
        }
        return $this->render('_newsfeed', [
            'datas' => $datas,
            'profile' => $profile,
        ]);
    }

    public function actionCategoryfeed(){
        if (Yii::$app->request->get()) {
            $code= Yii::$app->request->get()['code'];
            $datas = Feeds::find()->where(['category' => ['code' => $code]])->orderBy('created_time desc')->limit(20)->all();
            // $data = Yii::$app->mongodb->getCollection('feeds');
            // $datas = $data->aggregate([
            //     [
            //         '$match' => [
            //             'category' => ['code' => $code]
            //         ]
            //     ],
            //     [
            //         '$sort' => ["created_time" => 1]
            //     ],
            // ]);
            var_dump($datas);die;
            return $this->render('categoryfeed', [
                'datas' => $datas,
            ]);
        }
    }

    public function actionMyFeed(){
        $datas = Feeds::find()->where(['status' => 1])->orderBy('created_time desc')->limit(20)->all();
        $profile = "";
        if (Yii::$app->user->identity) {
            $profile = UserProfile::find()->where(['user_id' => Yii::$app->user->identity->_id])->one();
        }
        return $this->render('_newsfeed', [
            'datas' => $datas,
            'profile' => $profile,
        ]);
    }

    public function actionHotFeed(){
        $datas = Feeds::find()->where(['status' => 1])->orderBy('created_time desc')->limit(20)->all();
        $profile = "";
        if (Yii::$app->user->identity) {
            $profile = UserProfile::find()->where(['user_id' => Yii::$app->user->identity->_id])->one();
        }
        return $this->render('_newsfeed', [
            'datas' => $datas,
            'profile' => $profile,
        ]);
    }

    /**
     * Displays a single Feeds model.
     * @param integer $_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Feeds model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Feeds();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => (string) $model->_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the Feeds model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $_id
     * @return Feeds the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Feeds::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
