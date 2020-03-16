<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Feeds;
use yii\data\ActiveDataProvider;
use common\controllers\Frontend;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FeedsController implements the CRUD actions for Feeds model.
 */
class AjaxController extends Frontend {

	public function actionLoadMore() {
		$page = Yii::$app->request->get()['page']?(int)Yii::$app->request->get()['page']:1;
		$limit = 10;
		$offset = $limit * $page;
		$datas = Feeds::find()->where(['status' => 1])->orderBy('created_time desc')->limit($limit)->offset($offset)->all();
		return $this->renderAjax('loadmore', ['datas'=>$datas]);
	}
	
}