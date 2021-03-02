<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cscart_status_descriptions".
 *
 * @property int $status_id
 * @property string $description
 * @property string $email_subj
 * @property string|null $email_header
 * @property string $lang_code
 */
class StatusDescriptions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cscart_status_descriptions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_id', 'lang_code'], 'required'],
            [['status_id'], 'integer'],
            [['email_header'], 'string'],
            [['description', 'email_subj'], 'string', 'max' => 255],
            [['lang_code'], 'string', 'max' => 2],
            [['status_id', 'lang_code'], 'unique', 'targetAttribute' => ['status_id', 'lang_code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'description' => 'Description',
            'email_subj' => 'Email Subj',
            'email_header' => 'Email Header',
            'lang_code' => 'Lang Code',
        ];
    }

    public function getStatuses() 
    {
        return $this->hasMany(Status::class, ['status_id' => 'status_id']);
    }
}
