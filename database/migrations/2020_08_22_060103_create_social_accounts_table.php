<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_accounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('social_accounts_user_id_foreign');
			$table->string('buffer_id', 191);
			$table->string('buffer_token', 191);
			$table->string('account_id', 191);
			$table->string('type', 191);
			$table->string('name', 191);
			$table->text('avatar', 65535);
			$table->boolean('status')->default(1);
			$table->text('post_sent', 65535);
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
		Schema::drop('social_accounts');
	}

}
