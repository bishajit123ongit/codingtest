<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group_id')->unsigned()->index('social_posts_group_id_foreign');
			$table->text('text', 65535)->nullable();
			$table->text('link', 65535)->nullable();
			$table->string('image', 510)->nullable();
			$table->string('rsslink', 191)->nullable();
			$table->boolean('status')->default(0);
			$table->text('reason', 65535)->nullable();
			$table->dateTime('schedule_at')->nullable();
			$table->dateTime('sent_at')->nullable();
			$table->text('hash', 65535)->nullable();
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
		Schema::drop('social_posts');
	}

}
