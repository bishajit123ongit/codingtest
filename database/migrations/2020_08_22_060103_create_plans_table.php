<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191)->nullable();
			$table->string('slug', 191)->nullable();
			$table->string('type', 191)->nullable();
			$table->integer('price')->nullable();
			$table->string('ppm', 191)->nullable();
			$table->string('connucted_buf_account', 191)->nullable();
			$table->string('save_content_upload_post', 191)->nullable();
			$table->string('save_content_upload_group', 191)->nullable();
			$table->string('save_content_curation_feeds', 191)->nullable();
			$table->string('save_content_curation_group', 191)->nullable();
			$table->string('save_rss_auto_feeds', 191)->nullable();
			$table->string('save_rss_auto_group', 191)->nullable();
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
		Schema::drop('plans');
	}

}
