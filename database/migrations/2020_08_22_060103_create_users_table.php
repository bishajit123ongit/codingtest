<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('first_name', 191);
			$table->string('last_name', 191);
			$table->string('email', 191)->unique();
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->string('token')->nullable();
			$table->string('verification_token', 191)->nullable();
			$table->string('varifide', 191)->nullable();
			$table->string('buffer_token', 191)->nullable();
			$table->string('buffer_id', 191)->nullable();
			$table->string('stripe_id', 191)->nullable();
			$table->string('card_brand', 191)->nullable();
			$table->string('card_last_four', 191)->nullable();
			$table->dateTime('trial_ends_at')->nullable();
			$table->string('avatar', 191)->nullable();
			$table->string('timezone', 191)->nullable();
			$table->text('rebrandly_key')->nullable();
			$table->boolean('bfriday')->default(0);
			$table->text('rebrandly_domain', 65535)->nullable();
			$table->timestamps();
			$table->integer('sent_warning')->nullable()->default(0);
			$table->string('subs_status')->nullable();
			$table->text('user_meta')->nullable();
			$table->string('ip', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
