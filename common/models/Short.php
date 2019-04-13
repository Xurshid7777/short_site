<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "short".
 *
 * @property int $id
 * @property string $name
 * @property string $user
 * @property string $url
 * @property string $link
 * @property int $view
 */
class Short extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'short';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'link'], 'required'],
            [['view'], 'integer'],
            [['name', 'url', 'link'], 'string', 'max' => 255],
            [['user'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'user' => 'User',
            'url' => 'Url',
            'link' => 'Link',
            'view' => 'View',
        ];
    }
}
