<?php

namespace Fuel\Migrations;

class Create_posts_3
{
	public function up()
	{
		\DBUtil::create_table('posts', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
			'title' => array('type' => 'varchar', 'constraint' => 100),
			'body' => array('type' => 'text'),
			'category' => ['type' => 'varchar', 'constraint' => 255],
			'tags' => ['type' => 'varchar', 'constraint' => 255],
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('posts');
	}
}