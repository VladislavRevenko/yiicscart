<?php

use yii\db\Migration;
use common\models\User;

/**
 * Class m210224_092621_add_admin_user
 */
class m210224_092621_add_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
{
    $transaction = $this->getDb()->beginTransaction();
    $user = \Yii::createObject([
        'class'    => User::className(),
        'auth_key' => 'test123',
        'email'    => 'admin',
        'username' => 'admin',
        'password' => 'admin',
    ]);
    if (!$user->insert(false)) {
        $transaction->rollBack();
        return false;
    }
    $user->confirm();
    $transaction->commit();
}

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210224_092621_add_admin_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210224_092621_add_admin_user cannot be reverted.\n";

        return false;
    }
    */
}
