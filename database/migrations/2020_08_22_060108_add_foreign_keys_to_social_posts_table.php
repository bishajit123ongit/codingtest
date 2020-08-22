<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSocialPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('social_posts', function(Blueprint $table)
		{
			$table->foreign('group_id')->references('id')->on('social_post_groups')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('social_posts', function(Blueprint $table)
		{
			$table->dropForeign('social_posts_group_id_foreign');
		});
	}

}
