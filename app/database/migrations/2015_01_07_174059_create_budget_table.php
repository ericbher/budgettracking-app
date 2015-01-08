<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('budget', function(Blueprint $table)
		{
			$table->increments('id');

			$table->decimal('total', 5, 2);
			$table->decimal('needs', 5, 2);
			$table->decimal('wants', 5, 2);
			$table->decimal('savings', 5, 2);

			$table->integer('user_id');
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
		Schema::drop('budget');
	}

}
