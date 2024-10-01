<?php

namespace Fuel\Migrations;

class Create_posts_2
{
	public function up()
	{
		\DBUtil::create_table('posts', array(

		));
	}

	public function down()
	{
		\DBUtil::drop_table('posts');
	}
}