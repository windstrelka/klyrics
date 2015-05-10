<?php

class m150510_144851_create_category extends CDbMigration
{
        private $__table = 'categories';
        
	public function up()
	{
            $columns = array(
                'id'=>'pk',
                'name'=>'string'
            );
            $this->createTable($this->__table, $columns);
	}

	public function down()
	{
            $this->dropTable($this->__table);
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}