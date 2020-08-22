<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRssAutoPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rss_auto_posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('post_id')->unsigned()->index('rss_auto_posts_post_id_foreign');
			$table->text('text', 65535)->nullable();
			$table->string('link', 191)->nullable();
			$table->string('image', 191)->nullable();
			$table->boolean('status')->default(0);
			$table->dateTime('last_post')->nullable();
			$table->dateTime('pub_date')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rss_auto_posts');
	}

}
