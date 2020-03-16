<?php

namespace common\models\mongo;

use Yii;

/**
 * This is the model class for collection "feeds".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $source
 * @property mixed $title
 * @property mixed $crawler_id
 * @property mixed $type
 * @property mixed $user_id
 * @property mixed $description
 * @property mixed $img_source
 * @property mixed $created_time
 * @property mixed $retry_count
 * @property mixed $status
 */
class Feeds extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['social_db', 'feeds'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'source',
            'title',
            'crawler_id',
            'type',
            'user_id',
            'description',
            'url_source',
            'category',
            'img_source',
            'created_time',
            'retry_count',
            'status',
            'image',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['source', 'title', 'crawler_id', 'type', 'user_id', 'description', 'url_source', 'category', 'img_source', 'created_time', 'retry_count', 'status','image'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'source' => 'Source',
            'title' => 'Title',
            'crawler_id' => 'Crawler ID',
            'type' => 'Type',
            'user_id' => 'User ID',
            'description' => 'Description',
            'url_source' => 'Url Source',
            'category' => 'Category',
            'img_source' => 'Img Source',
            'created_time' => 'Created Time',
            'retry_count' => 'Retry Count',
            'status' => 'Status',
            'image' => 'Image',
        ];
    }
}
