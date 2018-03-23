<?php

use yii\db\Migration;

/**
 * Class m180323_212035_create_column_auth_key_user
 */
class m180323_212035_create_column_auth_key_user extends Migration
{
    public function up() {
        $this->addColumn('user', 'auth_key', $this->string(60)->notNull()->unique()->after('contact_phone'));
    }
    public function down() {
        $this->dropColumn('user', 'auth_key');
    }

}
