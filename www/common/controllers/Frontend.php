<?php

namespace common\controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use common\models\mongo\UserProfile;
/**
 * Description of Frontend
 *
 * @author octieu
 */
class Frontend extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    public function init(){
        if (isset(\Yii::$app->user->identity->_id)) {
            $userProfile = UserProfile::find()->where(['user_id' => \Yii::$app->user->identity->_id])->one();
            if (!empty($userProfile)) {
                \Yii::$app->params['profile'] = $userProfile;
            }
        }
        // var_dump(\Yii::$app->params['profile']['images']['avatar']);die;
    }
}
