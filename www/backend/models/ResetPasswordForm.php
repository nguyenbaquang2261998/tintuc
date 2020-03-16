<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResetPasswordForm
 *
 * @author 
 */

namespace backend\models;

use Yii;
use yii\base\Model;
use backend\models\Admin;

class ResetPasswordForm extends Model {

    public $userid;
    public $newpass;
    public $renewpass;

    public function rules() {
        return [
            [['userid', 'newpass', 'renewpass'], 'required'],
            ['newpass', 'match', 'pattern' => '/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{8,}/', 'message' => 'New password don`t match'],
            ['renewpass', 'compare', 'compareAttribute' => 'newpass']
        ];
    }

    public function attributeLabels() {
        return [
            'userid' => 'Username',
            'newpass' => 'New password',
            'renewpass' => 'Repeat new password'
        ];
    }

}
