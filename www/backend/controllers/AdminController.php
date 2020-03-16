<?php

namespace backend\controllers;

use Yii;
use backend\models\Admin;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\SignupForm;
use backend\models\ChangePasswordForm;
use backend\models\ResetPasswordForm;


/**
 * AdminController implements the CRUD actions for Admin model.
 */
class AdminController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Admin models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Admin::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Admin model.
     * @param integer $_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Admin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $new = $model->signup()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Admin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->status = (int)Yii::$app->request->post()['Admin']['status'];
            $model->email = Yii::$app->request->post()['Admin']['email'];
            $model->save();
            return $this->redirect(['index', 'id' => (string)$model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionChangepass() {
        $model = new ChangePasswordForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $admin = \backend\models\Admin::findIdentity(Yii::$app->user->identity->id);
            $admin->password_hash = Yii::$app->security->generatePasswordHash($model->newpass);
            if ($admin->save()) {
                Yii::$app->getSession()->setFlash('success', 'Change password success');
                return $this->redirect(['admin/index', 'id' => Yii::$app->user->identity->id]);
            } else {
                Yii::$app->getSession()->setFlash('success', 'Change password fail');
            }
        }
        return $this->render('change_pass', [
                    'model' => $model,
        ]);
    }
    public function actionResetpass() {
        $model = new ResetPasswordForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $admin = \backend\models\Admin::findIdentity($model->userid);
            $admin->password_hash = Yii::$app->security->generatePasswordHash($model->newpass);
            if ($admin->save()) {
                Yii::$app->getSession()->setFlash('success', 'Change password success');
                return $this->redirect(['admin/index', 'id' => Yii::$app->user->identity->id]);
            } else {
                Yii::$app->getSession()->setFlash('success', 'Change password fail');
            }
        }
        return $this->render('reset_pass', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Admin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Admin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $_id
     * @return Admin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Admin::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
