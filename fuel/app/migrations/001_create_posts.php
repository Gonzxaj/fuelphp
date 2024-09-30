<?php

namespace Fuel\Migrations;

use Fuel\Core\DBUtil;

namespace Fuel\Migrations;

class Create_posts
{

    function up()
    {
        \DBUtil::create_table('posts', array(
			'id' => array('type' => 'int', 'constraint' => 5,'auto_increment' => true),
			'title' => array('type' => 'varchar', 'constraint' => 100),
			'body' => array('type' => 'text'),
			'category' => ['type' => 'varchar', 'constraint' => 255],
			'tags' => ['type' => 'varchar', 'constraint' => 255],
            'created_at' => array(
                'type' => 'timestamp',
                'default' => \DB::expr('CURRENT_TIMESTAMP'),
            ),
		), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('posts');
    }
}
