<?php

namespace kouosl\forum\models;

use Yii;

/**
 * This is the model class for table "forums".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $picture
 *
 * @property data[] $data
 */
class forums extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forums';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description', 'picture'], 'string'],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'picture' => 'Picture',
        ];
    }

    public function getImagePath(){
        return sprintf("%s/forums/%s",Yii::getAlias ( '@data' ),$this->picture);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getData()
    {
        return $this->hasMany(forumData::className(), ['forum_id' => 'id']);
    }
}
