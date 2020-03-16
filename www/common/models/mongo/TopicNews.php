<?php

namespace common\models\mongo;

use Yii;

/**
 * This is the model class for collection "topic_news".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $id_news
 * @property mixed $id_topic
 * @property mixed $order
 */
class TopicNews extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['social_db', 'topic_news'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'id_news',
            'id_topic',
            'order',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_news', 'id_topic', 'order'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'id_news' => 'Id News',
            'id_topic' => 'Id Topic',
            'order' => 'Order',
        ];
    }
}
