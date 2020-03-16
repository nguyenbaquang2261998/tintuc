<?php

namespace frontend\models;

use Yii;
use common\models\UserDb;
use frontend\models\UserProfile;

class User extends UserDb{
	public function getProfile(){
        return $this->hasOne(UserProfile::className(),['user_id' => '_id']);
    }
}

?>