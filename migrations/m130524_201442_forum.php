<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_forum extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%forums}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
			'description' => $this->text()->notNull(),
            'picture' => $this->text(),
        ], $tableOptions);

        $this->createTable('{{%forum_data}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'forum_id' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->createIndex(
            'idx_forum_data_forum_id-1',
            'forum_data',
            'forum_id'
        );

        $this->addForeignKey(
          'fk_forum_data_forum_id-1',
          'forum_data',
          'forum_id',
          'forums',
          'id'
        );

    }

    public function down()
    {
        $this->dropForeignKey('fk_forum_data_forum_id-1','forum_data');
        $this->dropIndex('idx_forum_data_forum_id-1','forum_data');
        $this->dropTable('{{%forum_data}}');
        $this->dropTable('{{%forums}}');
    }
}
