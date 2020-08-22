<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFreeSignUpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('free_sign_ups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('url', 191)->unique();
			$table->string('code', 191);
			$table->integer('token_key');
			$table->boolean('status')->default(1);
			$table->string('trial_ends_at', 191);
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
		Schema::drop('free_sign_ups');
	}

}
