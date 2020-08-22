<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialPostGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_post_groups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('social_post_groups_user_id_foreign');
			$table->string('name', 191);
			$table->string('type', 191);
			$table->text('files_links', 65535)->nullable();
			$table->boolean('status')->default(0);
			$table->text('target_acounts', 65535)->nullable();
			$table->boolean('recycle')->default(0);
			$table->boolean('shuffle')->default(0);
			$table->integer('add_image')->nullable()->default(0);
			$table->string('interval', 191)->default('daily');
			$table->boolean('frequency')->default(1);
			$table->integer('fre_count')->default(0);
			$table->timestamp('start_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('next_schedule_time')->nullable();
			$table->string('interval_seconds', 191)->nullable();
			$table->string('repeat_wait', 191)->nullable();
			$table->dateTime('end_time')->nullable();
			$table->boolean('top_buffer_queue')->nullable()->default(0);
			$table->boolean('enable_slot')->default(0);
			$table->integer('slot_amount')->default(0);
			$table->text('hash', 65535)->nullable();
			$table->integer('skip_post_older')->nullable()->default(0);
			$table->integer('skip_post_newer')->nullable()->default(0);
			$table->string('utm', 191)->nullable();
			$table->integer('skip_keyword')->default(0);
			$table->string('keyword')->nullable();
			$table->dateTime('last_skip_post')->nullable();
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
		Schema::drop('social_post_groups');
	}

}
