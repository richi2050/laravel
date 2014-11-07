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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('email');
            $table->string('slug');
            $table->integer('id_rol');
            $table->boolean('activated')->default(1)->unsigned();
            $table->string('remember_token');
            $table->boolean('c_dom')->default(0)->unsigned();
            $table->boolean('c_cor')->default(0)->unsigned();
            $table->boolean('id_ctacor')->default(0)->unsigned();
            $table->boolean('id_ctareg')->default(0)->unsigned();
            $table->boolean('c_chat')->default(0)->unsigned();
            $table->boolean('c_call')->default(0)->unsigned();
            $table->boolean('c_mail')->default(0)->unsigned();
            $table->boolean('c_cobra')->default(0)->unsigned();

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
		Schema::drop('users');
	}

}
