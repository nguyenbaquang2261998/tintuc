<?php

namespace common\models\mongo;

use Yii;

/**
 * This is the model class for collection "user_profile".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $user_id
 * @property mixed $first_name
 * @property mixed $last_name
 * @property mixed $identity
 * @property mixed $phone
 * @property mixed $gender
 * @property mixed $birth_date
 * @property mixed $story
 * @property mixed $images
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class UserProfile extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['social_db', 'user_profile'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'user_id',
            'first_name',
            'last_name',
            'iden',
            'phone',
            'gender',
            'birth_date',
            'story',
            'images',
            'created_at',
            'updated_at',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'first_name', 'last_name', 'iden', 'phone', 'gender', 'birth_date', 'story', 'images', 'created_at', 'updated_at'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'iden' => 'Iden',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'birth_date' => 'Birth Date',
            'story' => 'Story',
            'images' => 'Images',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
