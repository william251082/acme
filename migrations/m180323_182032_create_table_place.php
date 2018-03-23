<?php

use yii\db\Migration;

/**
 * Class m180323_182032_create_table_place
 */
class m180323_182032_create_table_place extends Migration
{
    public function up()
    {
        $this->createTable('place', [
           'id' => $this->primaryKey()->unsigned(),
           'place_id' => $this->string(45)->notNull(),
           'lat' => $this->string(45)->notNull(),
           'lng' => $this->string(45)->notNull(),
            'country_code' => $this->string(2)->notNull(),
            'is_country' => $this->boolean()->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('place');
    }
}
