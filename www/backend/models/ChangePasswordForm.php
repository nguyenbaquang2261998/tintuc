<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChangePasswordForm
 *
 * @author 
 */

namespace backend\models;

use Yii;
use yii\base\Model;
use backend\models\Admin;

class ChangePasswordForm extends Model {

    public $oldpass;
    public $newpass;
    public $renewpass;

    /**
     * 
     * @return type array
     */
    public function rules() {
        return [
            [['oldpass', 'newpass', 'renewpass'], 'required'],
            ['oldpass', 'valiOldPass'],
            ['newpass', 'string', 'min' => 6],
            ['renewpass', 'compare', 'compareAttribute' => 'newpass']
        ];
    }

    /**
     * 
     * @param type $attribute
     * @param type $params
     */
    public function valiOldPass($attribute, $params) {
        $hash = Admin::findIdentity(Yii::$app->user->identity->id)->password_hash;
        if (!Yii::$app->security->validatePassword($this->oldpass, $hash))
            $this->addError($attribute, 'Old password is incorrect');
    }

    /**
     * 
     * @return type array
     */
    public function attributeLabels() {
        return [
            'oldpass' => 'Old password',
            'newpass' => 'New password',
            'renewpass' => 'Repeat new password'
        ];
    }

}
