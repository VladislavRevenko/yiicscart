<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cscart_sales_reports".
 *
 * @property int $report_id
 * @property int $position
 * @property string $name
 * @property string $status
 * @property string $type
 * @property string $period
 * @property int $time_from
 * @property int $time_to
 */
class SalesReports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cscart_sales_reports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position', 'time_from', 'time_to'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['status', 'type'], 'string', 'max' => 1],
            [['period'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'report_id' => 'Report ID',
            'position' => 'Position',
            'name' => 'Name',
            'status' => 'Status',
            'type' => 'Type',
            'period' => 'Period',
            'time_from' => 'Time From',
            'time_to' => 'Time To',
        ];
    }
}
