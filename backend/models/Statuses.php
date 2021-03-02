<?php

namespace app\models;

use Yii;
use app\models\StatusDescriptions;

/**
 * This is the model class for table "cscart_statuses".
 *
 * @property int $status_id
 * @property string $status
 * @property string $type
 * @property string $is_default
 * @property int $position
 */
class Statuses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cscart_statuses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position'], 'integer'],
            [['status', 'type', 'is_default'], 'string', 'max' => 1],
            [['status', 'type'], 'unique', 'targetAttribute' => ['status', 'type']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'status' => 'Status',
            'type' => 'Type',
            'is_default' => 'Is Default',
            'position' => 'Position',
        ];
    }

    public function getOrdersStatus() 
    {
        return $this->hasOne(StatusesDescriptions::class, ['status_id' => 'status_id']);
    }
}
