<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRssAutoPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rss_auto_posts', function(Blueprint $table)
		{
			$table->foreign('post_id')->references('id')->on('social_posts')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rss_auto_posts', function(Blueprint $table)
		{
			$table->dropForeign('rss_auto_posts_post_id_foreign');
		});
	}

}
