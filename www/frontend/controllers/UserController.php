<?php

namespace frontend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use common\controllers\Frontend;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Feeds;
use frontend\models\UserProfile;
use frontend\models\User;
use common\helpers\Tools;

class UserController extends Frontend {

	public function actionIndex(){
		$this->layout = 'mainuser';
		$datas = Feeds::find()->where(['status' => 1])->limit(20)->orderBy('created_time desc')->all();
		$profile = UserProfile::find()->where(['user_id' => Yii::$app->user->identity->_id])->one();
		return $this->render('index', [
			'datas' => $datas,
			'profile' => $profile,
		]);
	}
	public function actionProfile(){
		$this->layout = 'mainuser';
		// $model = UserProfile::find()->where(['user_id' => Yii::$app->user->identity->_id])->one();
		for ($i=date("Y",time()); $i >=1900 ; $i--) { 
			$years[$i] = $i;
		}
		$profile = UserProfile::find()->where(['user_id' => Yii::$app->user->identity->_id])->one();
		if(empty($profile)){
			$profile = new UserProfile();
		}
		if (Yii::$app->request->post() && $profile->validate()) {
			$profile->load(Yii::$app->request->post());
			$profile->created_at = time();
			$profile->user_id = Yii::$app->user->identity->_id;
			$profile->iden = Yii::$app->user->identity->username.'.'.Tools::convertTitle(Yii::$app->request->post()['UserProfile']['last_name']);
			// $str = Yii::$app->request->post()['UserProfile']['year']."-".Yii::$app->request->post()['UserProfile']['month']."-".Yii::$app->request->post()['UserProfile']['day'] ;
			// $datetime = new \MongoDB\BSON\UTCDateTime(strtotime($str));
			// var_dump($str);die;
			$datetime = Yii::$app->request->post()['birth_date'];
			$datetime = strtotime($datetime);
			// var_dump($datetime);die;
			// $profile->birth_date = $datetime;
			$profile->save();
			$users = User::findOne(Yii::$app->user->identity->_id);
			$users->email = Yii::$app->request->post()['UserProfile']['email'];
			$users->save();
			Yii::$app->getSession()->setFlash('success', 'Thêm mới thành công');
			return $this->redirect(['user/index']);
		}
		return $this->render('profile',[
			'profile' => $profile,
			'years' => $years,
		]);
	}

	public function actionUpdateprofile(){
		$this->layout = 'mainuser';
		$model = UserProfile::find()->where(['user_id' => Yii::$app->user->identity->_id])->one();
		for ($i=date("Y",time()); $i >=1900 ; $i--) { 
			$years[$i] = $i;
		}
		if($model->load(Yii::$app->request->post()) && $model->save()) {
			// $model->updated_at = time();
			// $model->save();
			$users = User::findOne(Yii::$app->user->identity->_id);
			$users->email = Yii::$app->request->post()['UserProfile']['email'];
			$users->save();
			Yii::$app->getSession()->setFlash('success', 'Cập nhật thành công');
			var_dump($model);die;
			return $this->redirect(['user/index']);
		}
		return $this->render('updateprofile',[
			'model' => $model,
			'years' => $years,
		]);
	}
}