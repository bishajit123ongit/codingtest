<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBufferPostingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('buffer_postings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('group_id');
			$table->integer('post_id');
			$table->string('account_id', 191);
			$table->string('account_service', 191);
			$table->string('buffer_post_id', 191);
			$table->text('post_text', 65535)->nullable();
			$table->timestamp('sent_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('buffer_postings');
	}

}
