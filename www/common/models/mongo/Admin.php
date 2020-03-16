<?php

namespace common\models\mongo;

use Yii;

/**
 * This is the model class for collection "admin".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $username
 * @property mixed $auth_key
 * @property mixed $password_hash
 * @property mixed $password_reset_token
 * @property mixed $active_token
 * @property mixed $active_code
 * @property mixed $first_name
 * @property mixed $last_name
 * @property mixed $identity
 * @property mixed $email
 * @property mixed $phone
 * @property mixed $gender
 * @property mixed $birth_date
 * @property mixed $story
 * @property mixed $status
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property mixed $verification_token
 */
class Admin extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['social_db', 'admin'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'active_token',
            'active_code',
            'first_name',
            'last_name',
            'identity',
            'email',
            'phone',
            'gender',
            'birth_date',
            'story',
            'status',
            'created_at',
            'updated_at',
            'verification_token',
        ];
    }

    /**
     * {@inheritdoc}
     */
    // public function rules()
    // {
    //     return [
    //         [['username', 'auth_key', 'password_hash', 'password_reset_token', 'active_token', 'active_code', 'first_name', 'last_name', 'identity', 'email', 'phone', 'gender', 'birth_date', 'story', 'status', 'created_at', 'updated_at', 'verification_token'], 'safe']
    //     ];
    // }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'active_token' => 'Active Token',
            'active_code' => 'Active Code',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'identity' => 'Identity',
            'email' => 'Email',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'birth_date' => 'Birth Date',
            'story' => 'Story',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
        ];
    }
}
